<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class RejectedVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::onlyTrashed()->paginate(10);
        return view('admin.Vendor.rejected-vendors', compact('vendors'));
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = base64_decode($id);

        $vendor = Vendor::onlyTrashed()->find($id);

        if (!$vendor) {
            return redirect()->back()->withErrors([
                'error' => 'Vendor not found'
            ]);
        }

        $vendor->restore();

        return redirect()->back()->with([
            'success' => 'Vendor restored'
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = Vendor::onlyTrashed()->find($id);

        if(!$vendor){
            return redirect()->back()->withErrors([
                'error' => 'Vendor Not Found'
            ]);
        }

        $vendor->forceDelete();

        return redirect()->back()->with([
            'success' => 'Vendor Deleted'
        ]);
    }
}
