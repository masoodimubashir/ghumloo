@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Add Room</h4>
                        <a href="{{route('vendor-room.index')}}" class="btn btn-outline-primary col-md-2">
                            View Rooms
                        </a>
                    </div>
                    <form
                        action="{{route('vendor-room.store')}}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <h4 class="mb-4">Package Details</h4>

                        <div class="row form-group">
{{--                            <div>--}}
{{--                                <label for="hotel_id">Select Hotel</label>--}}
{{--                                <select class="form-select" id="hotel_id" name="hotel_id">--}}
{{--                                    @if($hotels->isNotEmpty())--}}
{{--                                        @foreach($hotels as $hotel)--}}
{{--                                            <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="col-md-3">
                                <label>Room Number</label>

                                <input
                                    name="room_number"
                                    min="0"
                                    type="number"
                                    placeholder="Room Number..."
                                    class="form-control"
                                    value="{{old('room_number')}}"
                                >
                                @error('room_number')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label>Room Name</label>

                                <input
                                    name="room_name"
                                    type="text"
                                    placeholder="Room Name..."
                                    class="form-control"
                                    value="{{old('room_name')}}"
                                >
                            </div>
                            <div class="col-md-3">
                                <label>Room Area</label>

                                <input
                                    name="area"
                                    type="number"
                                    placeholder="Room Area..."
                                    class="form-control"
                                    value="{{old('area')}}"

                                >
                                @error('area')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="room_type_id">Select Room Type</label>
                                <select class="form-select" name="room_type_id">
                                    @if($room_types->isNotEmpty())
                                        @foreach($room_types as $room_type)
                                            <option value="{{$room_type->id}}">{{$room_type->room_type}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('room_type_id')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">

                            <div class="col-md-3">
                                <label>Meal Type</label>

                                <select name="meal_type" class="form-select">
                                    <option disabled selected>Meal Type</option>
                                    <option value="ap">
                                        AP
                                    </option>
                                    <option value="ep">
                                        EP
                                    </option>
                                    <option value="cp">
                                        CP
                                    </option>
                                    <option value="map">
                                        MAP
                                    </option>
                                </select>
                                @error('meal_type')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-3 ">
                                <label>Ac/Non Ac</label>
                                <select name="ac" class="form-select">
                                    <option disabled selected>Ac / Non-Ac</option>
                                    <option value="ac">
                                        AC
                                    </option>
                                    <option value="no">
                                        No Ac
                                    </option>
                                </select>
                                @error('ac')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-3 ">
                                <label>Select Bed Type</label>

                                <select name="bed_id" class="form-select">
                                    <option value="" disabled selected>Bed Type</option>
                                    @if($beds->isNotEmpty())
                                        @foreach($beds as $bed)
                                            <option value="{{$bed->id}}">{{$bed->bed_type}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('bed_id')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label>Free Cancellation</label>

                                <select name="cancellation_in_days" class="form-select">
                                    <option value="" disabled selected>Free Cancellation (In - Days)</option>
                                    <option
                                        value="1">1
                                    </option>
                                    <option
                                        value="2">2
                                    </option>
                                    <option
                                        value="3">3
                                    </option>
                                    <option
                                        value="4">4
                                    </option>
                                    <option

                                        value="5">5
                                    </option>

                                </select>
                                @error('cancellation_in_days')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <h4>Rate Plan</h4>
                        <div class="row form-group">

                            <div class="col-md-6 ">'
                                <label>Price Per Night</label>
                                <input
                                    name="price_per_night"
                                    min="0"
                                    type="number"
                                    placeholder="Price / (Night)"
                                    class="form-control"
                                    value="{{old('price_per_night')}}"
                                >
                                @error('price_per_night')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Discount</label>
                                <input
                                    name="discount_price"
                                    min="0"
                                    type="number"
                                    placeholder="Discount"
                                    class="form-control"
                                    value="{{old('discount_price')}}"
                                >
                                @error('discount_price')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">

                            <div class="col-md-4 ">
                                <label>Tax</label>
                                <input
                                    name="tax"
                                    type="number"
                                    placeholder="Tax @ 10%"
                                    class="form-control"
                                    value="{{old('tax')}}"
                                >
                                @error('tax')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-4 ">
                                <label>Max Persons</label>

                                <input
                                    name="max_persons"
                                    type="number"
                                    placeholder="Max Allowed Persons"
                                    class="form-control"
                                    value="{{old('max_persons')}}"
                                >
                                @error('max_persons')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-4 ">
                                <label>Children</label>

                                <input
                                    name="max_children"
                                    type="number"
                                    placeholder="Max Allowed Children"
                                    class="form-control"
                                    value="{{old('max_children')}}"
                                >
                                @error('max_children')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>


                        <div class="mt-4 p-3 rounded bg-secondary">
                            <div class="form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="free_cancellation"
                                    name="free_cancellation"
                                >
                                <label class="form-check-label" for="free_cancellation">
                                    Free Cancellation
                                </label>
                            </div>
                            <div class="form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="breakfast"
                                    name="breakfast">
                                <label class="form-check-label" for="breakfast">
                                    Breakfast
                                </label>
                            </div>
                            <div class="form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="lunch"
                                    name="lunch">
                                <label class="form-check-label" for="lunch">
                                    Lunch
                                </label>
                            </div>
                            <div class="form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="dinner"
                                    name="dinner">
                                <label class="form-check-label" for="dinner">
                                    Dinner
                                </label>
                            </div>
                        </div>

                        <hr>

                        <h4>Extra Services</h4>

                        <div class="mt-4 p-3 rounded bg-secondary">

                            @if($services->isNotEmpty())
                                @foreach($services as $service)
                                    <label>
                                        {!! $service->icon !!}
                                        <input type="checkbox" name="services[]" value="{{$service->id}}">
                                        <span class="lever"></span>
                                    </label>
                                @endforeach
                            @endif

                            @error('services')
                            {{ $message }}
                            @enderror

                        </div>

                        <div class="mt-4">
                            <label for="inputName">Overview</label>
                            <textarea
                                class="form-control"
                                style="height:300px;"
                                name="overview"
                                id="overview"

                            >
                                {{old('overview')}}
                                    </textarea>

                            @error('overview')
                            {{ $message }}
                            @enderror
                        </div>


                        <div class="mt-4">
                            <label for="upload-input">Upload Images</label>
                            <input type="file" name="images[]" id="upload-input"
                                   multiple>

                            @error('images[]')
                            {{ $message }}
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var hotelSelect = document.getElementById('hotel_id');
            var locationSelect = document.getElementById('location_id');

            hotelSelect.addEventListener('change', function () {
                var hotelId = this.value;
                if (hotelId) {
                    fetch("{{ url('vendor/vendor-hotel') }}/" + hotelId)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            locationSelect.innerHTML = '<option  selected>Select Location</option>';
                            // Populate location options
                            console.log(data)
                            data.data.forEach(location => {
                                var option = document.createElement('option');
                                option.value = location.id;
                                option.textContent = location.state;
                                locationSelect.appendChild(option);
                            });
                            locationSelect.disabled = false; // Enable location select
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    locationSelect.innerHTML = '<option disabled selected>Select Hotel First</option>';
                    locationSelect.disabled = true; // Disable location select
                }
            });
        });

    </script>

@endsection
