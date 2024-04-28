<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontEndViewsController extends Controller
{
    public function search(Request $request)
    {
        dd(request()->all());
    }
    public function index()
    {
        $packages = Package::where([
            'status' => 1,
            'popular' => 1
        ])->limit(5)->orderBy('package_name')->withCount('hotels')->get();

        $hotels = Hotel::where([
            'active_by_admin' => '1',
            'popular' => 1
        ])->withCount('rooms')->limit(5)->orderBy('hotel_name')->get();

        $top_hotels = Hotel::where('star_rating', '>', 3)
            ->orderBy('star_rating', 'desc')
            ->limit(10)
            ->get();

        return view('front.index', compact('packages', 'hotels', 'top_hotels'));
    }

    public function contactus()
    {
        return view('front.contact');
    }

    public function packages(Request $request)
    {

        $packages = Package::with(['hotels' => function ($query) {
            $query->with('city');
        }])->where('status', 1);

        if ($request->ajax()) {

            $packages = $packages->where(function ($query) use ($request) {
                if ($request->min_price && $request->max_price) {
                    $query->whereBetween('package_price', [$request->min_price, $request->max_price]);
                }
            })->orderBy('package_name')->get();

            return response()->json($packages);
        }

        $packages = $packages->paginate(20);
        return view('front.all-packages', compact('packages'));

    }

    public function hotels(Request $request)
    {
        $hotels = Hotel::select(['hotel_name', 'images', 'id', 'search_area', 'city_id', 'phone_two', 'phone_one', 'star_rating'])
            ->where('active_by_admin', '1')
            ->with(['rooms' => function ($query) {
                $query->select('price_per_night')->orderBy('price_per_night')->take(1);
            }])
            ->withCount('rooms')
            ->orderBy('hotel_name');

            if ($request->ajax()){
                $hotels->where(function ($query) use ($request) {
                    if($request->has('rating')){
                        $query->where('star_rating',  $request->rating);
                    }
                });

                $hotels = $hotels->get();
                return response()->json($hotels);
            }

            $hotels = $hotels->paginate();

        return view('front.all-hotels', compact('hotels'));
    }

    public function packagedetail($id)
    {
        $package = Package::select(['package_name', 'package_price', 'total_stay_period', 'id', 'images', 'short_description', 'description'])
            ->where('id', json_decode($id))
            ->with(['reviews' => function ($query) {
                $query->where([
                    'reviewable_type' => Package::class
                ])->take(5)->orderBy('rating', 'desc');
            }])
            ->with(['hotels' => function ($query) {
                $query->select('hotel_name', 'city_id')
                    ->with(['city' => function ($query) {
                        $query->select('id', 'city');
                    }]);
            }])->orderBy('package_name')->first();
        return view('front.package-detail', compact('package'));
    }

    public function hoteldetail($id)
    {
        $hotel = Hotel::select([
            'id', 'hotel_name', 'description', 'longitude', 'latitude', 'search_area' , 'images', 'city_id', 'star_rating', 'property_type_id', 'phone_two', 'phone_one', 'allowed_pets', 'check_out', 'check_in', 'email'
        ])->with(['propertyType' => function ($query) {
            $query->select('id', 'property_type');
        }])->with(['city' => function ($q) {
            $q->select('id', 'city', 'state_id')
                ->with(['state' => function ($q) {
                    $q->select('id', 'state');
                }]);
        }])->with(['rooms' => function ($query) {
            $query->with(['roomConfiguration' => function ($q) {
                $q->with('bedType', 'roomType');
            }]);
        }])->with(['reviews' => function ($query) {
            $query->where([
                'reviewable_type' => Hotel::class
            ])->take(5)->orderBy('rating', 'desc');
        }])->find($id);

        $hotels = Hotel::has('reviews')->with(['reviews' => function ($query) {
            $query->where([
                'rating'=> 5,
                'reviewable_type' => Hotel::class
            ])->take(1)->orderBy('rating', 'desc');
        }])->take(5)->get();

        return view('front.hotel-detail', compact('hotel', 'hotels'));
    }

    public function seightseeing()
    {
        return view('front.sight-seeing');
    }
}
