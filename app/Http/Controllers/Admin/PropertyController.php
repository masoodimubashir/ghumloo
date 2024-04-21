<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = PropertyType::latest()->paginate(10);

        return view('admin.Property.properties', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $properties = Validator::make($request->all(), [
            'property_type' => 'required|string|unique:property_types',
        ]);

        if ($properties->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error, Form Fields Are Required'
            ])->withInput();
        }

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('property_type'));

        PropertyType::create([
            'property_type' => $request->input('property_type'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->back()->with(['success' => 'Property created successfully.']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        $property = PropertyType::find(base64_decode($id));

        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Room not Found']);
        }

        return view('admin.Property.edit-property', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'property_type' => 'required|string|unique:property_types,property_type,' . $id,
        ]);

        $property = PropertyType::find($id);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('property_type'));

        $property->update([
            'property_type' => $request->input('property_type'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->route('property.index')->with(['success' => 'Property Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = base64_decode($id);

        $property = PropertyType::find($id);

        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property Not Found']);
        }

        $property->delete();
        return redirect()->back()->with(['success' => 'Property Deleted']);

    }
}
