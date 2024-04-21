@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Rooms</h4>
                        <a class="col-md-2 btn btn-outline-primary" href="{{route('vendor-room.create')}}">
                            Add Room
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Images</th>
                                <th>Room Name</th>
                                <th>Room Number</th>
                                <th>Price Per Night</th>
                                <th>Meal Plan</th>
                                <th>AC/Non Ac</th>
                                <th>Bed Type</th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($rooms->isNotEmpty())
                                @foreach($rooms as $room)
                                   @php
                                       $images = json_decode($room->images)
                                   @endphp
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{asset('storage/' .  $images[0])}}" alt="image"/>
                                        </td>
                                        <td>
                                            {{$room->room_name}}
                                        </td>
                                        <th>
                                            {{$room->room_number}}
                                        </th>
                                        <td>
                                            {{$room->price_per_night}}
                                        </td>
                                        <td>
                                            {{$room->roomConfiguration->meal_type}}
                                        </td>
                                        <td>
                                            {{$room->roomConfiguration->ac}}
                                        </td>
                                        <td>
                                            {{$room->roomConfiguration->bedType->bed_type}}
                                        </td>
                                        <td>
                                            <a
                                                class="btn btn-outline-info btn-sm rounded-circle p-1"
                                                href="{{route('vendor-room.edit', [base64_encode($room->id)])}}"
                                            >
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <form id="deleteForm{{$room->id}}"
                                                  action="{{ route('vendor-room.destroy', [base64_encode($room->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$room->id}}').submit();"
                                                >
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


































