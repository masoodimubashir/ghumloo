<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::latest()->paginate(10);
        return view('admin.Hotel.all-hotel-suits', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::find($id);

        if (!$city){
            return response()->json([
                'error' => 'City not found'
            ]);
        }

        $hotel = $city->hotels;

        return response()->json([
            $hotel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $hotel = Hotel::find(base64_decode($id));

        if (!$hotel) {
            return redirect()->back()->withErrors([
                'error' => 'Hotel Not Found'
            ]);
        }

        $hotel->update([
            'active_by_admin' => $hotel->active_by_admin === 1 ? 0 : 1
        ]);

        return redirect()->back()->with([
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

        if ($images !== null) {
            foreach ($images as $image) {
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }
            }
        }

        $hotel->delete();

        return redirect()->back()->with([
            'success' => 'Hotel Deleted'
        ]);
    }
}
