<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::with('hotels')
            ->latest()
            ->orderBy('package_name')
            ->paginate(10);

        return view('admin.Package.all-packages', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'package_name' => 'required|unique:packages,package_name|string|min:5',
            'discount_price' => 'required|integer|min:1',
            'gst' => 'required|integer|min:0',
            'validity' => 'required|min:0',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'booking_date' => 'date|sometimes',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price_per_stay' => 'required|array',
            'price_per_stay.*' => 'required|integer|min:1',
            'stay_period' => 'required|array',
            'stay_period.*' => 'required|integer|min:1',
        ]);


        $total_stay_period = 0;
        $total_price = 0;
        $package_price = 0;
        $packageId = substr(strtoupper($request->package_name), 0, 3) . Str::random(5);
        $slug = Str::slug($request->package_name, '-');
        $hotelIds = $request->hotel_id;
        $prices = $request->price_per_stay;
        $stayPeriods = $request->stay_period;
        $images = [];


        if (count($request->input('stay_period')) > 0 && count($request->input('stay_period')) === count($request->input('price_per_stay'))) {

            for ($i = 0; $i < count($request->input('stay_period')); $i++) {
                $total_stay_period += intval($request->input('stay_period')[$i]);
                $total_price += intval($request->input('stay_period')[$i]) * intval($request->input('price_per_stay')[$i]);
            }

            $discount_price = $total_price - $request->input('discount_price');
            $gst = ($discount_price * $request->input('gst')) / 100;
            $package_price = $discount_price + $gst;

        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $fileName = time() . '_' . $image->getClientOriginalName();
                $path = Storage::putFileAs('PackageImages', $image, $fileName);
                $images[] = $path;
            }
            $images = implode(',', $images);
        }

        $package = Package::create([
            'package_name' => $request->package_name,
            'package_price' => $package_price,
            'packageid' => $packageId,
            'discount_price' => $request->discount_price,
            'gst' => $request->gst,
            'total_stay_period' => $total_stay_period,
            'status' => $request->has('status') ? 1 : 0,
            'popular' => $request->has('popular') ? 1 : 0,
            'validity' => $request->validity,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'slug' => $slug,
            'images' => $images,
        ]);

        foreach ($hotelIds as $index => $hotelId) {
            $package->hotels()->attach($hotelId, [
                'price_per_stay' => $prices[$index],
                'stay_period' => $stayPeriods[$index],
            ]);
        }

        return redirect()->route('package.index')->with([
            'success', 'Package created successfully'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::where('status', 1)->orderBy('state')->get();
        return view('admin.Package.create-package', compact('states'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::with('hotels')->find(base64_decode($id));

        if (!$package){
            return redirect()->route('package.index')->withErrors([
                'error' => 'Package not found'
            ]);
        }

        $states = State::where('status', 1)->orderBy('state')->get();

        return view('admin.Package.edit-package', compact('package', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'package_name' => 'required', Rule::unique('packages', 'package_name')->ignore($id),
            'discount_price' => 'required|integer|min:1',
            'gst' => 'required|integer|min:0',
            'validity' => 'required|min:0',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'booking_date' => 'date|sometimes',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price_per_stay' => 'required|array',
            'price_per_stay.*' => 'required|integer|min:1',
            'stay_period' => 'required|array',
            'stay_period.*' => 'required|integer|min:1',
        ]);

        $package = Package::find($id);

        $total_stay_period = 0;
        $total_price = 0;
        $package_price = 0;
        $packageId = substr(strtoupper($request->package_name), 0, 3) . Str::random(5);
        $slug = Str::slug($request->package_name, '-');
        $hotelIds = $request->hotel_id;
        $prices = $request->price_per_stay;
        $stayPeriods = $request->stay_period;
        $images = [];


        if (count($request->input('stay_period')) > 0 && count($request->input('stay_period')) === count($request->input('price_per_stay'))) {

            for ($i = 0; $i < count($request->input('stay_period')); $i++) {
                $total_stay_period += intval($request->input('stay_period')[$i]);
                $total_price += intval($request->input('stay_period')[$i]) * intval($request->input('price_per_stay')[$i]);
            }

            $discount_price = $total_price - $request->input('discount_price');
            $gst = ($discount_price * $request->input('gst')) / 100;
            $package_price = $discount_price + $gst;

        }

        if ($request->hasFile('images')) {

            $oldImages = explode(',', $package->images);

            foreach ($oldImages as $old_image){
                if (Storage::exists($old_image)){
                    Storage::delete($old_image);
                }
            }

            foreach ($request->file('images') as $image) {

                $fileName = time() . '_' . $image->getClientOriginalName();
                $path = Storage::putFileAs('PackageImages', $image, $fileName);
                $images[] = $path;
            }
            $images = implode(',', $images);
        }

       $updated_package = $package->update([
            'package_name' => $request->package_name,
            'package_price' => $package_price,
            'packageid' => $packageId,
            'discount_price' => $request->discount_price,
            'gst' => $request->gst,
            'total_stay_period' => $total_stay_period,
            'status' => $request->has('status') ? 1 : 0,
            'popular' => $request->has('popular') ? 1 : 0,
            'validity' => $request->validity,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'slug' => $slug,
            'images' => $images,
        ]);

        foreach ($hotelIds as $index => $hotelId) {
            $pivotData = [
                'price_per_stay' => $prices[$index] ,
                'stay_period' => $stayPeriods[$index] ,
            ];

            $package->hotels()->sync([$hotelId => $pivotData]);
        }


        return redirect()->route('package.index')->with([
            'success', 'Package created successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::find(base64_decode($id));

        if (!$package) {
            return redirect()->route('package.index')->withErrors([
                'error' => 'This package does not exist'
            ]);
        }

        $package->delete();

        return redirect()->back()->with([
            'success', 'Package deleted successfully'
        ]);
    }
}
