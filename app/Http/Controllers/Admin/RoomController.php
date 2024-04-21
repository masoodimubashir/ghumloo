<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::latest()->paginate(10);

        return view('admin.Room.rooms', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rooms = Validator::make($request->all(), [
            'room_type' => 'required|string|unique:rooms',
        ]);

        if ($rooms->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error, Form Fields Are Required'
            ])->withInput();
        }

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('room_type'));

        Room::create([
            'room_type' => $request->input('room_type'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->back()->with(['success' => 'Room created successfully.']);
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
        $room = Room::find($id);

        if (!$room) {
            return redirect()->back()->withErrors(['error' => 'Room not Found']);
        }

        return view('admin.Room.edit-rooms', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'room_type' => 'required|string|unique:rooms,room_type,' . $id,
        ]);

        $rooms = Room::find($id);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($request->input('room_type'));

        $rooms->update([
            'room_type' => $request->input('room_type'),
            'status' => $status,
            'slug' => $slug
        ]);

        return redirect()->route('room.index')->with(['success' => 'Room Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::find($id);

        if (!$room) {
            return redirect()->back()->withErrors(['error' => 'Room Not Found']);
        }

        $room->delete();
        return redirect()->back()->with(['success' => 'Room Deleted']);

    }
}
