<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.Service.all-services', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = Validator::make($request->all(), [
            'service' => 'required|string|unique:services',
            'icon' => 'required|string'
        ]);

        if ($service->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error, Form Fields Are Required'
            ])->withInput();
        }

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('service'));

        Service::create([
            'service' => $request->input('service'),
            'icon' => $request->input('icon'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->back()->with(['success' => 'Service created successfully.']);
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
        $service = Service::find(base64_decode($id));

        if (!$service) {
            return redirect()->back()->withErrors([
                'error' => 'Location not Found'
            ]);
        }

        return view('admin.Service.edit-service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'service' => 'required|string|unique:services,service,' . $id,
            'icon' => 'required|string'
        ]);

        $service = Service::find($id);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('service'));

        $service->update([
            'service' => $request->input('service'),
            'icon' => $request->input('icon'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->route('service.index')->with([
            'success' => 'Service Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = base64_decode($id);

        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->withErrors([
                'error' => 'Service Not Found'
            ]);
        }

        $service->delete();
        return redirect()->back()->with([
            'success' => 'Service Deleted'
        ]);

    }
}
