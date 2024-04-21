@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Hotels</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>View Images</th>
                                <th>Hotel Name</th>
                                <th>Property Type</th>
                                <th>Address & Contact Details</th>
                                <th>Popularity</th>
                                <th>Action</th>
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
                                        {{$hotel->propertyType->property_type}}
                                    </td>
                                    {{--                                    <td>--}}
                                    {{--                                        <div class="progress">--}}
                                    {{--                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"--}}
                                    {{--                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </td>--}}
                                    <td>
                                        Email: {{$hotel->email}} <br>
                                        <hr>
                                        Phone One: {{$hotel->phone_one}} <br>
                                        <hr>
                                        Phone Two: {{$hotel->phone_two}}
                                    </td>
                                    <td>
                                        <form id="updatePopularity{{$hotel->id}}"
                                              action="{{ route('update-hotel-popularity', [base64_encode($hotel->id)]) }}"
                                              method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($hotel->popular === 1)
                                                <a
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('updatePopularity{{$hotel->id}}').submit();"
                                                >
                                                    <div class="badge badge-warning">Set Unpopular</div>
                                                </a>
                                            @else
                                                <a
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('updatePopularity{{$hotel->id}}').submit();"
                                                >
                                                    <div class="badge badge-success">Set Popular</div>
                                                </a>
                                            @endif
                                        </form>
                                    </td>

                                    <td>
                                        <form id="updateForm{{$hotel->id}}"
                                              action="{{ route('hotel.update', [base64_encode($hotel->id)]) }}"
                                              method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($hotel->active_by_admin === 1)
                                                <a
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('updateForm{{$hotel->id}}').submit();"
                                                >
                                                    <div class="badge badge-warning">Deactivate</div>
                                                </a>
                                            @else
                                                <a
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('updateForm{{$hotel->id}}').submit();"
                                                >
                                                    <div class="badge badge-success">Activate</div>
                                                </a>
                                            @endif
                                        </form>
                                    </td>

                                    <td>
                                        <form id="deleteForm{{$hotel->id}}"
                                              action="{{ route('hotel.destroy', [base64_encode($hotel->id)]) }}"
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

