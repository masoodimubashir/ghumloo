<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::orderBy('state')->paginate(10);
        return view('admin.State.state', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = Validator::make($request->all(),[
            'state' => 'required|string|unique:states,state',
        ]);

        if ($state->fails()){
            return redirect()->back()->withErrors([
                'error' => 'State Already Exist',
            ]);
        }

        State::create([
            'state' => $request->input('state'),
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('state.index')->with([
            'success', 'State created successfully.'
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
        $state = State::find(base64_decode($id));

        if (!$state){
            return response()->json([
                'error' => 'State not found.'
            ]);
        }

        return response()->json([
            'state' => $state
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $state = State::find(base64_decode($id));

        if (!$state){
            return redirect()->back()
                ->withErrors([
                    'error' => 'State not found.'
                ]);
        }

        return view('admin.State.edit-state', compact('state'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'state' => 'required|string|unique:states,state,' . base64_decode($id),
        ]);

        $state = State::find(base64_decode($id));

        if (!$state){
            return redirect()->route('state.index')->withErrors([
                'error' => 'State not found.'
            ]);
        }

        $state->update([
            'state' => $data['state'],
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('state.index')->with([
            'success', 'State updated successfully.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $state = State::find(base64_decode($id));

        if (!$state) {
            return redirect()
                ->back()
                ->withErrors([
                    'error' => 'State not found'
                ]);
        }

        $state->delete();

        return redirect()->back()->with([
            'success' => 'State deleted successfully.'
        ]);
    }
}
