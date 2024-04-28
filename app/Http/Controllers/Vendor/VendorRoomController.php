<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\BedType;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class VendorRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rooms = Room::latest()->orderBy('room_name')->paginate(10);
        return view('Vendor.Room.rooms', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'bed_id' => 'required|exists:bed_types,id',
            'meal_type' => 'required|in:ep,ap,cp,map',
            'ac' => 'required|in:ac,no',
            'room_number' => 'required|string|unique:rooms,room_number',
            'room_name' => 'required|string|max:255',
            'area' => 'required|numeric|min:0',
            'price_per_night' => 'required|numeric|min:0',
            'cancellation_in_days' => 'required|numeric|min:1|max:6',
            'services' => 'required|array',
            'services.*' => 'required|string|max:255',
            'overview' => 'required|string',
            'max_persons' => 'required|numeric',
            'max_children' => 'required|numeric',
            'images' => 'sometimes|array',
//            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg|max:1024'
        ]);


        $room_images = [];

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {

                $fileName = time() . '_' . $image->getClientOriginalName();
                $path = Storage::putFileAs('RoomImages', $image, $fileName);
                $images[] = $path;
            }
            $room_images = implode(',', $images);
        }

        $room_services = [];
        foreach ($data['services'] as $service) {
            $room_services[] = $service;
        }

        $services = implode(',', $room_services);

        $room = Room::create([
            'vendor_id' => session('vendor')->id,
            'room_number' => $data['room_number'],
            'room_name' => $data['room_name'],
            'area' => $data['area'],
            'max_persons' => $data['max_persons'],
            'max_children' => $data['max_children'],
            'price_per_night' => $request->price_per_night,
            'cancellation_in_days' => $data['cancellation_in_days'],
            'free_cancellation' => $request->has('free_cancellation') ? 1 : 0,
            'lunch' => $request->has('lunch') ? 1 : 0,
            'dinner' => $request->has('dinner') ? 1 : 0,
            'breakfast' => $request->has('breakfast') ? 1 : 0,
            'services' => $services,
            'overview' => $data['overview'],
            'images' => $request->hasFile('images') ? $room_images : null,
        ]);

        $room->roomConfigurations()->create([
            'room_id' => $room->id,
            'room_type_id' => $request->input('room_type_id'),
            'bed_id' => $request->input('bed_id'),
            'meal_type' => $request->input('meal_type'),
            'ac' => $data['ac']
        ]);

        return redirect()->route('vendor-room.index')->with([
            'success' => 'Room added successfully'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $room_types = RoomType::where('status', '1')->get();

        $beds = BedType::where('status', '1')->get();

        $services = Service::where('status', '1')->get();

        return view('Vendor.Room.add-rooms', compact('room_types', 'beds', 'services'));
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

        $room = Room::find(base64_decode($id));

        if (!$room) {
            return redirect()->route('vendor-room.index')->withErrors([
                'error' => 'Room not found'
            ]);
        }

        $hotels = Hotel::where('active_by_admin', 1)
            ->where('vendor_id', session('vendor')->id)
            ->get();
        $room_types = RoomType::where('status', '1')->get();
        $beds = BedType::where('status', '1')->get();
        $services = Service::where('status', '1')->get();

        return view('Vendor.Room.edit-room',
            compact('room', 'room_types', 'room_types', 'beds', 'services', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'bed_id' => 'required|exists:bed_types,id',
            'meal_type' => 'required|in:ep,ap,cp,map',
            'ac' => 'required|in:ac,no',
            'room_number' => 'required|string', Rule::unique('rooms', 'room_number')->ignore(base64_decode($id)),
            'room_name' => 'required|string|max:255',
            'area' => 'required|numeric|min:0',
            'price_per_night' => 'required|numeric|min:0',
            'cancellation_in_days' => 'required|numeric|min:1|max:6',
            'services' => 'required|array',
            'services.*' => 'required|string|max:255',
            'overview' => 'required|string',
            'max_persons' => 'required|numeric',
            'max_children' => 'required|numeric',
//            'images' => 'sometimes|array',
//            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $room = Room::find(base64_decode($id));

        if (!$room) {
            return redirect()->back()->withErrors([
                'error' => 'No Room To Be updated'
            ]);
        }

        $encodedImages = [];


        if ($request->hasFile('images')) {

            $old_images = explode(',', $room->images);

            if ($old_images !== null) {
                foreach ($old_images as $image) {
                    if (Storage::exists($image)) {
                        Storage::delete($image);
                    }
                }
            }

            $images = [];

            foreach ($request->file('images') as $image) {

                $fileName = time() . '_' . $image->getClientOriginalName();
                $path = Storage::putFileAs('RoomImages', $image, $fileName);
                $images[] = $path;
            }
            $room_images = implode(',', $images);
        }

        $Services = [];
        foreach ($data['services'] as $service) {
            $Services[] = $service;
        }

        $room_services = implode(',' , $Services);

        $updated_room = $room->update([
            'room_number' => $data['room_number'],
            'room_name' => $data['room_name'],
            'area' => $data['area'],
            'max_persons' => $data['max_persons'],
            'max_children' => $data['max_children'],
            'price_per_night' => $request->price_per_night,
            'cancellation_in_days' => $data['cancellation_in_days'],
            'free_cancellation' => $request->has('free_cancellation') ? 1 : 0,
            'lunch' => $request->has('lunch') ? 1 : 0,
            'dinner' => $request->has('dinner') ? 1 : 0,
            'breakfast' => $request->has('breakfast') ? 1 : 0,
            'services' => $room_services,
            'overview' => $data['overview'],
            'images' => $request->hasFile('images') ? $room_images : $room->images,
        ]);


        foreach ($room->roomConfigurations as $roomConfig) {
            $roomConfig->update([
                'room_type_id' => $request->input('room_type_id'),
                'bed_id' => $request->input('bed_id'),
                'meal_type' => $request->input('meal_type'),
                'ac' => $data['ac'],
            ]);
        }

        return redirect()->route('vendor-room.index')->with([
            'success' => 'Room added successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $room = Room::find(base64_decode($id));

        if (!$room) {
            return redirect()->route('vendor-room.index')->withErrors([
                'error' => 'Room not found'
            ]);
        }

        $room->delete();

        return redirect()->route('vendor-room.index')->with([
            'success' => 'Room deleted successfully'
        ]);
    }
}
