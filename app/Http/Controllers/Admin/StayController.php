<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConditionStayPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $condition_stays = ConditionStayPeriod::latest()->paginate(10);
        return view('admin.Stay.all-stays', compact('condition_stays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $stay_validator = Validator::make($request->all(), [
            'num_of_days' => 'required|integer',
            'discount' => 'required|integer'
        ]);

        if ($stay_validator->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error! Form Fields Are Required'
            ]);
        }

        ConditionStayPeriod::create([
            'num_of_days' => $request->input('num_of_days'),
            'discount' => $request->input('discount')
        ]);

        return redirect()->back()->with([
            'success' => 'Stay Period Created'
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
    public function edit(string $id)
    {
        $condition_stay = ConditionStayPeriod::find($id);

        if(!$condition_stay){
            return redirect()->back()->withErrors([
                'error' => 'This Field Cannot Be Found'
            ]);
        }

        return view('admin.Stay.edit-stay', compact('condition_stay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stays = $request->validate([
            'num_of_days' => 'required|integer',
            'discount' => 'required|integer'
        ]);

        $condition_stay = ConditionStayPeriod::find($id);

        $condition_stay->update($stays);

        return redirect()->route('stay.index')->with([
            'success' => 'Stay Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $condition_stay = ConditionStayPeriod::find($id);

        if (!$condition_stay) {
            return redirect()->back()->withErrors([
                'error' => 'Stay Period Not Found'
            ]);
        }

        $condition_stay->delete();

        return redirect()->back()->with([
            'success' => 'Stay Deleted'
        ]);
    }
}
