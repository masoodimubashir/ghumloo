<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BedType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BedTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beds = BedType::latest()->paginate(10);
        return view('admin.Bed.bed', compact('beds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $beds = Validator::make($request->all(), [
            'bed_type' => 'required|string|unique:bed_types',
        ]);

        if ($beds->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error, Form Fields Are Required'
            ])->withInput();
        }

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('bed_type'));

        BedType::create([
            'bed_type' => $request->input('bed_type'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->back()->with(['success' => 'BedType created successfully.']);
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
        $bed = BedType::find(base64_decode($id));

        if (!$bed) {
            return redirect()->back()->withErrors(['error' => 'BedType not Found']);
        }

        return view('admin.Bed.edit-bed', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'bed_type' => 'required|string|unique:bed_types,bed_type,' . $id,
        ]);

        $beds = BedType::find($id);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('bed_type'));

        $beds->update([
            'bed_type' => $request->input('bed_type'),
            'status' => $status, 'slug' => $slug
        ]);

        return redirect()->route('bed.index')->with(['success' => 'BedType Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = base64_decode($id);

        $beds = BedType::find($id);

        if (!$beds) {
            return redirect()->back()->withErrors(['error' => 'BedType Not Found']);
        }

        $beds->delete();
        return redirect()->back()->with(['success' => 'BedType Deleted']);

    }
}
