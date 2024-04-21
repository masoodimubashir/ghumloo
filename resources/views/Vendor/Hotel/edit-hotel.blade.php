@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Edit Hotel</h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2"
                           href="{{route('vendor-hotel.index')}}">
                            View Hotels
                        </a>
                    </div>

                    <form
                        class="forms-sample"
                        action="{{route('vendor-hotel.update', [base64_encode($hotel->id)])}}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="form-group col-md-4 ">
                                <label for="hotel_name">Hotel Name</label>
                                <input
                                    id="hotel_name"
                                    type="text"
                                    value="{{$hotel->hotel_name}}"
                                    name="hotel_name"
                                    placeholder="Hotel Name"
                                    class="form-control"

                                >
                                @error('hotel_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="room_id">Room</label>
                                <select id="room_id" class="" multiple name="room_id[]">
                                    @if($rooms->isNotEmpty())
                                        @foreach($rooms as $room)
                                            <option
                                                data-date="{{$room->room_name}}"
                                                value="{{$room->id}}">
                                                {{$room->room_name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('hotel_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="email">Hotel Email</label>
                                <input
                                    id="email"
                                    name="email"
                                    value="{{$hotel->email}}"
                                    placeholder="Hotel Email"
                                    type="text"
                                    class="form-control"

                                >
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="phone_one">Phone One</label>
                                <input
                                    id="phone_one"
                                    type="text"
                                    value="{{$hotel->phone_one}}"
                                    name="phone_one"
                                    placeholder="91..."
                                    class="form-control"

                                >
                                @error('phone_one')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone_one">Phone Two</label>
                                <input
                                    id="phone_two"
                                    typeof="text"
                                    name="phone_two"
                                    value="{{$hotel->phone_two}}"
                                    placeholder="97... (Optional)"
                                    type="number"
                                    class="form-control"
                                >
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="property_type_id">Select Properties</label>
                                <select name="property_type_id" id="property_type_id" class="form-select">
                                    @if($properties->isNotEmpty())
                                        @foreach($properties as $property)
                                            <option
                                                value="{{$property->id}}">{{$property->property_type}}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('property_type_id')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group col-4">
                                <label for="state">Select State</label>
                                <select id="state"
                                        data-placeholder="State"
                                        class="form-select">
                                    @if($states->isNotEmpty())
                                        @foreach($states as $state)
                                            <option
                                                value="{{$state->id}}"
                                                data-date="{{$state->state}}">
                                                {{$state->state}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>


                                @error('state_id')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group col-4">
                                <label for="city_id">Select City</label>
                                <select id="city_id"
                                        name="city_id"
                                        class="form-select">
                                    <option selected>Select State First</option>
                                </select>


                                @error('city_id')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="check_in">Check In</label>
                                <input
                                    type="date"
                                    id="check_in"
                                    value="{{$hotel->check_in}}"
                                    name="check_in"
                                    class="form-control pb-4"

                                >
                                @error('check_in')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <label for="check_out">Check Out</label>
                                <input
                                    type="date"
                                    id="check_out"
                                    value="{{$hotel->check_out}}"
                                    name="check_out"
                                    class="form-control pb-4"

                                >
                                @error('check_out')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="form-floating">
                                <textarea
                                    class="form-control" placeholder="Description"
                                    id="description"
                                    name="description"
                                    style="height: 100px">{{$hotel->description}}</textarea>
                                <label for="description">Description</label>
                            </div>
                            @error('description')
                            {{ $message }}
                            @enderror
                        </div>
                        <br>
                        <div class="row form-group">

                            <div class="col-md-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" value="{{$hotel->address}}" name="address"
                                       class="form-control">
                                @error('address')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="greyrow col-md-3">
                                <label>Search Location</label>
                                <div class="form-group">
                                    <input type="text" id="search_input1" class="form-control"
                                           placeholder="Type Address here" name="search_area"
                                           value="{{ $hotel->search_area }}"/>
                                </div>

                                <input type="hidden" id="longitude" class="form-control "
                                       name="longitude" value="{{ $hotel->longitude }}"/>
                                <input type="hidden" id="latitude" class="form-control "
                                       name="latitude" value="{{ $hotel->latitude }}"/>
                                {{--                        <div class="col-sm-12">--}}
                                {{--                            <div id="googleMap" style="width:100%;height:400px;"></div>--}}

                                {{--                        </div>--}}

                            </div>

                            <div class="col-md-3">

                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Images
                                        ex</label>
                                    <input class="form-control pb-4" type="file" name="images[]" id="formFileMultiple"
                                           multiple>
                                </div>

                                @error('images')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="star_rating">Rating</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="star_rating"
                                    placeholder="Star Rating"
                                    value="{{$hotel->star_rating}}"
                                >
                            </div>
                        </div>

                        <div class="switch mar-bot-20 ">
                            <div class=" form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    name="allowed_pets"
                                    id="allowed_pets"
                                    {{$hotel->allowed_pets === 1 ? 'checked' : ''}}
                                >
                                <label class="form-check-label" for="allowed_pets">Pets Allowed</label>
                            </div>

                            @error('allowed_pets')
                            {{ $message }}
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary mt-3" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#state').on('change', function () {
                var stateId = $(this).val();
                if (stateId) {
                    $.ajax({
                        url: "{{ route('cities-fetch') }}",
                        type: "GET",
                        data: {
                            id: stateId
                        },
                        dataType: 'json',
                        success: function (response) {
                            $('#city_id').empty(); // Clear existing options
                            $('#city_id').append('<option value="">Select City</option>'); // Add default option

                            $.each(response, function (key, city) {

                                $.each(city, function (i, state) {
                                    console.log(state)
                                    $('#city_id').append($('<option>', {
                                        value: state.id,
                                        text: state.city
                                    }));
                                })

                            });
                        }
                    });
                } else {
                    $('#city_id').empty(); // Clear city options if state is not selected
                }
            });
        });

    </script>



    <script type="text/javascript">
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('search_input'));
        });
    </script>

    <script>


        function initMap() {
            initialize();
            setlatlong(parseFloat($("#longitude").val()), parseFloat($("#latitude").val()));
        }


        function setlatlong(longitude, latitude) {

            const myLatLng = {lat: latitude, lng: longitude};

            const map = new google.maps.Map(document.getElementById("googleMap"), {
                center: myLatLng,
                zoom: 15,
                mapId: "DEMO_MAP_ID",

            });


            const marker = new google.maps.marker.AdvancedMarkerElement({
                map,
                position: myLatLng,
                title: 'Uluru',
            });


            google.maps.event.addListener(marker, 'dragend', function (marker) {

                geocodePosition(marker.latLng);
                console.log(marker)
                var latLng = marker.latLng;
                currentLatitude = latLng.lat();
                currentLongitude = latLng.lng();
                $("#latitude").val(currentLatitude);
                $("#longitude").val(currentLongitude);
            });
        }


        function geocodePosition(pos) {
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                latLng: pos
            }, function (responses) {
                if (responses && responses.length > 0) {
                    updateMarkerAddress(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('Cannot determine address at this location.');
                }
            });
        }

        function updateMarkerAddress(str) {
            // /  console.log(str)
            $("#search_input1").val(str);
        }

        // show google map

        function initialize() {
            addressEl = document.getElementById('search_input1');
            var options = {componentRestrictions: {country: "IN"}};
            var autocomplete = new google.maps.places.Autocomplete(addressEl, options);

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var addresss = document.getElementById("search_input1").value;
                var places = autocomplete.getPlace();

                console.log(autocomplete)


                // Use logical OR operator to provide default values
                $("#longitude").val(places.geometry.location.lng());
                $("#latitude").val(places.geometry.location.lat());
                setlatlong(places.geometry.location.lng(), places.geometry.location.lat());
            });

            // Set default values initially
            $("#longitude").val(defaultLongitude);
            $("#latitude").val(defaultLatitude);
            setlatlong(defaultLongitude, defaultLatitude);
        }

    </script>


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv-WwyCAZ5rJArnCELEtTalFrSBmcyLgk&libraries=places&v=weekly&callback=initMap"></script>

    <script>

        $(document).ready(function () {
            $(".upload-area").click(function () {
                $('#upload-input').trigger('click');
            });

            $('#upload-input').change(event => {
                if (event.target.files) {
                    let filesAmount = event.target.files.length;
                    $('.upload-img').html("");
                    //
                    for (let i = 0; i < filesAmount; i++) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            let html = `
                                                        <div class = "uploaded-img">
                                                            <img src = "${event.target.result}">
                                                            <button type = "button" class = "remove-btn">
                                                                <i class = "fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    `;
                            $(".upload-img").append(html);
                        }
                        reader.readAsDataURL(event.target.files[i]);
                    }
                    //
                    $('.upload-info-value').text(filesAmount);
                    $('.upload-img').css('padding', "20px");
                }
            });
            //
            $(window).click(function (event) {
                if ($(event.target).hasClass('remove-btn')) {
                    $(event.target).parent().remove();
                } else if ($(event.target).parent().hasClass('remove-btn')) {
                    $(event.target).parent().parent().remove();
                }
            })
        });
    </script>
@endsection






