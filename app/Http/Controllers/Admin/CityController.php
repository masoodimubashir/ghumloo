<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states_with_cities = State::has('cities')->orderBy('state')->paginate(10);
        $states = State::where('status', 1)->orderBy('state')->get();
        return view('admin.City.city', compact('states', 'states_with_cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Validator::make(request()->all(), [
            'city' => 'required|string|unique:cities,city',
            'state_id' => 'required|exists:states,id',
        ]);

        if ($data->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'City Already Exist',
            ]);
        }

        City::create([
            'city' => $request->input('city'),
            'state_id' => $request->input('state_id'),
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->back()->with([
            'success', 'City added successfully'
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
        $state = State::find($id);

        if (!$state) {
            return response()->json([
                'error' => 'State Not Found'
            ]);
        }

        $cities = $state->cities;

        return response()->json($cities);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $city = City::with('state')->findOrFail(base64_decode($id));

        if (!$city) {
            return redirect()->back()->withErrors([
                'error' => 'City Not Found',
            ]);
        }

        $states = State::where('status', 1)->orderBy('state')->get();

        return view('admin.City.edit-city', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Validator::make(request()->all(), [
            'city' => 'required|string', Rule::unique('cities', 'city')->ignore(base64_decode($id)),
            'state_id' => 'required|exists:states,id',
        ]);


        if ($data->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'City Already Exist.'
            ]);
        }

        $city = City::find(base64_decode($id));

        if (!$city) {
            return redirect()->back()->withErrors([
                'error' => 'City not found.'
            ]);
        }

        $city->update([
            'city' => request()->input('city'),
            'state_id' => request()->input('state_id'),
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('city.index')->with([
            'success', 'State updated successfully.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find(base64_decode($id));

        if (!$city) {
            return redirect()->back()->withErrors([
                'error' => 'City Not Found',
            ]);
        }

        $city->delete();

        return redirect()->back()->with([
            'success', 'State deleted successfully.'
        ]);
    }
}
