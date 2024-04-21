<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RejectedVendor;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::withoutTrashed()->latest()->paginate(10);

        return view('admin.Vendor.all-vendors', compact('vendors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $vendor = Vendor::find($id);

        if ($vendor) {
            return redirect()->back()->withErrors([
                'error' => 'Vendor Can Be Found',
            ]);
        }

        return response()->json([
            'data' => $vendor
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $id = base64_decode($id);

        $vendor = Vendor::find($id);

        if (!$vendor) {
            return redirect()->back()->withErrors([
                'error' => 'Vendor Not Found'
            ]);
        }

        $vendor->delete();

        return redirect()->back()->with([
            'success' => 'Vendor Send To Trash !!'
        ]);

    }


}
