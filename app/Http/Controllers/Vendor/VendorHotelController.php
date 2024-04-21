<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\PropertyType;
use App\Models\Room;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class VendorHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::where([
            'vendor_id' => session('vendor')->id,
            'active_by_admin' => 1
        ],
        )->latest()->paginate(10);

        $states = State::where('status', '1')
            ->orderBy('state')
            ->get();

        $properties = PropertyType::where('status', '1')
            ->orderBy('property_type')
            ->get();
        return view('Vendor.Hotel.hotels', compact('hotels', 'states', 'properties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $encodedImages = [];

        $hotel = $request->validate([
            'property_type_id' => 'required|exists:property_types,id',
            'room_id' => 'required|exists:rooms,id',
            'city_id' => 'required|exists:cities,id',
            'hotel_name' => 'required|string|max:255',
            'email' => "required|email|unique:hotels,email",
            'phone_one' => 'required|string|max:255',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'search_area' => 'required|string|max:255',
            'longitude' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
            'star_rating' => 'nullable|integer',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'

        ]);


        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {

                $fileName = time() . '_' . $image->getClientOriginalName();
                $path = Storage::putFileAs('hotelImages', $image, $fileName);
                $images[] = $path;
            }
            $encodedImages = json_encode($images);
        }


        $hotel_created = Hotel::create([
            'property_type_id' => $hotel['property_type_id'],
            'vendor_id' => Session::get('vendor')->id,
            'hotel_name' => $hotel['hotel_name'],
            'city_id' => $hotel['city_id'],
            'email' => $hotel['email'],
            'phone_one' => $hotel['phone_one'],
            'phone_two' => $request->input('phone_two'),
            'check_in' => $hotel['check_in'],
            'check_out' => $hotel['check_in'],
            'description' => $hotel['description'],
            'address' => $hotel['address'],
            'search_area' => $hotel['search_area'],
            'longitude' => $hotel['longitude'],
            'latitude' => $hotel['longitude'],
            'star_rating' => $hotel['star_rating'],
            'allowed_pets' => $request->input('allowed_pets') ? 1 : 0,
            'slug' => Str::slug($request->input('slug')),
            'active_by_admin' => $request->has('active_by_admin' ? 1 : 0),
            'popular' => $request->has('popular') ? 1 : 0,
            'status' => $request->has('status') ? 1 : 0,
            'images' => $request->hasFile('images') ? $encodedImages : null,
        ]);

        $hotel_created->rooms()->sync($hotel['room_id']);

        return redirect()->route('vendor-hotel.index')->with([
            'success' => 'Hotel Created'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $states = State::where('status', 1)
            ->orderBy('state')
            ->get();

        $properties = PropertyType::where('status', '1')
            ->orderBy('property_type')
            ->get();

        $rooms = Room::orderBy('room_name')->get();

        return view('Vendor.Hotel.add-hotel', compact('properties', 'states', 'rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = Hotel::find($id);

        if (!$hotel) {
            return response()->json([
                'error' => 'Hotel Not Found'
            ]);
        }

        $location = $hotel->locations()->get();

        return response()->json([
            'data' => $location
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $hotel = Hotel::find(base64_decode($id));

        if (!$hotel) {
            return redirect()->back()->withErrors([
                'error' => 'Hotel Not Found'
            ]);
        }

        $states = State::where('status', '1')
            ->orderBy('state')
            ->get();

        $rooms = Room::orderBy('room_name')->get();


        $properties = PropertyType::where('status', '1')
            ->orderBy('property_type')
            ->get();

        return view('Vendor.Hotel.edit-hotel', compact('hotel', 'properties', 'states', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $encodedImages = [];

        $hotel = $request->validate([
            'property_type_id' => 'required|exists:property_types,id',
            'room_id' => 'required|exists:rooms,id',
            'city_id' => 'required|exists:cities,id',
            'hotel_name' => 'required|string|max:255',
            'email' => "required", Rule::unique('hotels', 'email')->ignore(base64_decode($id)),
            'phone_one' => 'required|string|max:255',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'search_area' => 'required|string|max:255',
            'longitude' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
            'star_rating' => 'nullable|integer',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $hotel_fetched = Hotel::find(base64_decode($id));

        if ($request->hasFile('images')) {

            $old_images = json_decode($hotel_fetched->images);

            if ($request->hasFile('images')) {

                if ($old_images !== null) {
                    foreach ($old_images as $image) {
                        if (Storage::exists($image)) {
                            Storage::delete($image);
                        }
                    }

                }

                $images = [];
                foreach ($request->file('images') as $image) {

                    $fileName = time() . '_' . $image->getClientOriginalName();
                    $path = Storage::putFileAs('hotelImages', $image, $fileName);
                    $images[] = $path;
                }
                $encodedImages = json_encode($images);
            }
        }

        $hotel_created = $hotel_fetched->update([
            'property_type_id' => $hotel['property_type_id'],
            'vendor_id' => Session::get('vendor')->id,
            'hotel_name' => $hotel['hotel_name'],
            'city_id' => $hotel['city_id'],
            'email' => $hotel['email'],
            'phone_one' => $hotel['phone_one'],
            'phone_two' => $request->input('phone_two'),
            'check_in' => $hotel['check_in'],
            'check_out' => $hotel['check_in'],
            'description' => $hotel['description'],
            'address' => $hotel['address'],
            'search_area' => $hotel['search_area'],
            'longitude' => $hotel['longitude'],
            'latitude' => $hotel['longitude'],
            'star_rating' => $hotel['star_rating'],
            'allowed_pets' => $request->input('allowed_pets') ? 1 : 0,
            'slug' => Str::slug($request->input('hotel_name')),
            'images' => $encodedImages ? $encodedImages : $hotel_fetched->images
        ]);

        $hotel_fetched->rooms()->sync($hotel['room_id']);

        return redirect()->route('vendor-hotel.index')->with([
            'success' => 'Hotel Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find(base64_decode($id));

        if (!$hotel) {
            return redirect()->back()->withErrors([
                'error' => 'Hotel Not Found'
            ]);
        }

        $images = json_decode($hotel->images);

        foreach ($images as $image) {
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
        }

        $hotel->delete();

        return redirect()->back()->with([
            'success' => 'Hotel Deleted'
        ]);
    }
}
