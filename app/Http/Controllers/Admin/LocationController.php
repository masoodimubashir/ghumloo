<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::latest()->paginate(10);

        return view('admin.Location.all-locations', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $location = Validator::make($request->all(), [
            'country' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string|unique:locations,state',
        ]);


        if ($location->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Some Went Wrong Try Again'
            ]);
        }

        Location::create([
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'status' => $request->has('status') ? '1' : '0',
            'slug' => Str::slug($request->input('state'))
        ]);

        return redirect()->back()->with([
            'success' => 'Location Created Successfully'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        $location = Location::find(base64_decode($id));

        if (!$location) {
            return redirect()->back()->withErrors([
                'error' => 'Location not Found'
            ]);
        }

        return view('admin.Location.edit-location', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'country' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string|unique:locations,state,' . $id,
        ]);

        $fetched_location = Location::find($id);


        $fetched_location->update([
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'status' => $request->has('status') ? '1' : '0',
            'slug' => Str::slug($request->input('location'))
        ]);

        return redirect()->route('location.index')->with([
            'success' => 'Location Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $id = base64_decode($id);

        $location = Location::find($id);

        if (!$location) {
            return redirect()->back()->withErrors([
                'error' => 'Location Not Found'
            ]);
        }

        $location->delete();

        return redirect()->back()->with([
            'success' => 'Location Deleted'
        ]);

    }
}
