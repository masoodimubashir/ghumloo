@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Hotels</h4>
                        <a href="{{route('vendor-hotel.create')}}" class="btn btn-outline-primary col-md-2">
                            Create Hotel
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>View Images</th>
                                <th>Hotel Name</th>
                                <th>Rooms</th>
                                <th>Property Type</th>
                                <th>Address & Contact Details</th>
                                <th>Popularity</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hotels as $hotel)
                                @php
                                    $images = json_decode($hotel->images)
                                @endphp
                                <tr>
                                    <td>
                                        <img src="{{asset('storage/' . $images[0])}}" alt="{{$hotel->image}}"/>
                                    </td>
                                    <td>
                                        {{$hotel->hotel_name}}
                                    </td>
                                    <td>
                                        @foreach($hotel->rooms as $room)
                                            {{ $room->room_name }} <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        {{$hotel->propertyType->property_type}}
                                    </td>
                                    <td>
                                        <small>Email: {{$hotel->email}}</small>
                                        <br>
                                        <small>
                                            Address:
                                            <br>
{{--                                            @foreach($hotel->locations as $hotel_location)--}}
{{--                                                {{$hotel_location->country}},--}}
{{--                                                {{$hotel_location->city}},--}}
{{--                                                {{$hotel_location->state}},--}}
{{--                                                <br>--}}
{{--                                            @endforeach--}}

                                            {{$hotel->address}}
                                            Address:
                                            <br>
                                            Phone One : {{$hotel->phone_one}}
                                            <br>
                                            Phone Two : {{$hotel->phone_two ?? ''}}
                                        </small>
                                    </td>

                                    <td>
                                        @if($hotel->popular === 1)
                                            <div class="text-success">Popular</div>

                                        @else
                                            <div class="text-danger">Unpopular</div>

                                        @endif
                                    </td>

                                    <td>
                                        <a
                                            class="btn btn-outline-info btn-sm rounded-circle p-1"
                                            href="{{route('vendor-hotel.edit', [base64_encode($hotel->id)])}}"
                                        >
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    </td>

                                    <td>
                                        <form id="deleteForm{{$hotel->id}}"
                                              action="{{ route('vendor-hotel.destroy', [base64_encode($hotel->id)]) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a
                                                class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                href="#"
                                                onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$hotel->id}}').submit();"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <div class="pagination mt-4">
                        <li class="page-item {{ $hotels->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $hotels->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $hotels->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $hotels->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




