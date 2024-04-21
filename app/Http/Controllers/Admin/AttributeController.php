<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BedType;
use App\Models\PropertyType;
use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AttributeController extends Controller
{
    public function attributes()
    {
        return view('admin.Attribute.attributes');
    }

    public function viewAttributes()
    {
        $room_types = RoomType::paginate(20);

        $bed_types = BedType::paginate(20);

        $services = Service::paginate(20);

        $property_types = PropertyType::paginate(20);

        return view('admin.Attribute.view-attributes', compact('room_types', 'bed_types', 'services', 'property_types'));
    }

    public function createRoomType(Request $request)
    {
        $room = $request->validate(['room_type' => 'required|string|unique:App\Models\RoomType',]);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($room['room_type']);

        RoomType::create(['room_type' => $room['room_type'], 'status' => $status, 'slug' => $slug]);

        return redirect()->back()->with(['success' => 'Room Type created successfully.']);
    }

    public function createPropertyType(Request $request)
    {
        $property_type = $request->validate([
            'property_type' => 'required|string|unique:App\Models\PropertyType'
        ]);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($property_type['property_type']);

        PropertyType::create(['property_type' => $property_type['property_type'], 'status' => $status, 'slug' => $slug]);

        return redirect()->back()->with(['success' => 'Property Type created successfully.']);
    }

    public function createServiceType(Request $request)
    {
        $service = $request->validate([
            'service' => 'required|string|unique:App\Models\Service',
            'icon' => 'required|string'
        ]);

        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($service['service']);

        Service::create([
            'service' => $service['service'],
            'icon' => $service['icon'],
            'status' => $status, 'slug' => $slug
        ]);

        return redirect()->back()->with(['success' => 'Service created successfully.']);
    }

    public function createBedType(Request $request)
    {
        $bed_type = $request->validate([
            'bed_type' => 'required|string|unique:App\Models\BedType',
        ]);


        $status = $request->has('status') ? '1' : '0';
        $slug = Str::slug($bed_type['bed_type']);

        BedType::create(['bed_type' => $bed_type['bed_type'], 'status' => $status, 'slug' => $slug]);

        return redirect()->back()->with(['success' => 'Bed Type created successfully.']);
    }

//    Start From Here
    public function showRoom($id)
    {

        $room_type = RoomType::find($id);


        if (!$room_type) {
            return response()->json(['message' => 'data not found'], 404);
        }

        return response()->json($room_type, 200);
    }

    public function updateRoom(Request $request, $id)
    {

        $updated_room = $request->validate([
            'room_type' => [
                'required',
                'string',
            ],
        ]);


        $room_type = RoomType::find($id);

        if (!$room_type) {
            return response()->json(['error' => 'This Room Cannot Be Found'], 404);
        }

        $room_type->update([
            'room_type' => $updated_room['room_type'],
            'slug' => Str::slug($updated_room['room_type']),
            'status' => $request->has('status') ? '1' : '0'
        ]);

        return redirect()->back()->with(['success' => 'Room Updated Successfully']);
    }

    public function showBed($id)
    {

        $bed_type = BedType::find($id);


        if (!$bed_type) {
            return response()->json([
                'message' => 'data not found'
            ], 404);
        }

        return response()->json($bed_type, 200);
    }

    public function updateBed(Request $request, $id)
    {

        $updated_room = $request->validate([
            'bed_type' => 'required|string|unique:bed_types,bed_type,' . $id
        ]);


        $bed_type = BedType::find($id);

        if (!$bed_type) {
            return response()->json(['error' => 'This Room Cannot Be Found'], 404);
        }

        $bed_type->update([
            'bed_type' => $updated_room['bed_type'],
            'slug' => Str::slug($updated_room['bed_type']),
            'status' => $request->has('status') ? '1' : '0'
        ]);

        return redirect()->back()->with(['success' => 'Bed Updated Successfully']);
    }

    public function showService($id)
    {

        $room_type = Service::find($id);

        if (!$room_type) {
            return response()->json(['message' => 'data not found'], 404);
        }

        return response()->json($room_type, 200);
    }

    public function updateService(Request $request, $id)
    {

        $updated_service = $request->validate([
            'service' => 'required|string|unique:services:service,' . $id,
            'icon' => 'required|string'
        ]);

        $service_type = Service::find($id);

        if (!$service_type) {
            return response()->json(['error' => 'This Service Cannot Be Found'], 404);
        }

        $service_type->update([
            'service' => $updated_service['service'],
            'slug' => Str::slug($updated_service['service']),
            'status' => $request->has('status') ? '1' : '0',
            'icon' => $updated_service['icon']
        ]);

        return redirect()->back()->with(['success' => 'Service Updated Successfully']);
    }

    public function showProperty($id)
    {

        $property_type = PropertyType::find($id);

        if (!$property_type) {
            return response()->json(['message' => 'data not found'], 404);
        }

        return response()->json($property_type, 200);
    }

    public function updateProperty(Request $request, $id)
    {

        $updated_property_type = $request->validate([
            'property_type' => 'required|string|unique:property_types,property_type,' . $id
        ]);

        $property_type = PropertyType::find($id);

        if (!$property_type) {
            return response()->json(['error' => 'This Property Cannot Be Found'], 404);
        }

        $property_type->update([
            'property_type' => $updated_property_type['property_type'],
            'slug' => Str::slug($updated_property_type['property_type']),
            'status' => $request->has('status') ? '1' : '0']);

        return redirect()->back()->with(['success' => 'Property Updated Successfully']);
    }

    public function showServices($type, $id)
    {

        try {
            switch ($type) {
                case 'room':
                    $item = RoomType::find($id);
                    break;
                case 'bed':
                    $item = BedType::find($id);
                    break;
                case 'service':
                    $item = Service::find($id);
                    break;
                case 'property':
                    $item = PropertyType::find($id);
                    break;
                default:
                    return response()->json(['error' => "{$type} Not Found"], 400);
            }

            return response()->json([
                'data' => $item,
                'type' => $type,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Something Went Wrong',
            ], 500);
        }
    }
}
