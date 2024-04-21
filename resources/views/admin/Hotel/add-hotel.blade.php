@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div>

        <br/>
        <ul class="nav nav-tabs tab-list">
            <li class="active">
                <a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i>
                    <span>Add Hotel - Suit</span>
                </a>
            </li>

        </ul>


        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="box-inn-sp">
                    <div class="sb2-2-3">
                        <div class="tab-inn">
                            <form>
                                <div class="row">
                                    <div class="input-field col-md-6">
                                        <input name="name" type="text" class="invalid" placeholder="Hotel Name..">
                                    </div>
                                    <div class="input-field col-md-6">
                                        <input name="email" type="email" class="invalid" placeholder="Email..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col-md-6">
                                        <input name="phone_one" min="0" type="number" class="invalid"
                                               placeholder="+91....">
                                    </div>
                                    <div class="input-field col-md-6 s6">
                                        <input id="phone_two" min="0" type="number" class="invalid"
                                               placeholder="=91....">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select>
                                            <option value="" disabled selected>Property Type</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select>
                                            <option value="" disabled selected>Location</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" name="check_in" class="datepicker">
                                    </div>
                                    <div class="col-md-6 ">
                                        <input type="date" name="check_out" class="datepicker">
                                    </div>
                                </div>



                                <div class="greyrow">
                                    <input
                                        type="text"
                                        id="search_input1"
                                        class="form-control"
                                        placeholder="Search Location" name="SearchArea" required
                                        value="{{ old('SearchArea') }}"/>
                                    <div class="col-sm-6">
                                        <input type="hidden" id="longitude" class="form-control"
                                               name="longitude" required value="{{ old('longitude') }}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="hidden" id="latitude" class="form-control"
                                               name="latitude" required value="{{ old('latitude') }}"/>

                                    </div>
                                    <div id="googleMap" style="width:100%;height:400px;"></div>
                                </div>

                                <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputName">Map</label>
                                                <textarea class="form-control" name="map" required>{{ old('map') }}</textarea>

                                            </div>
                                        </div> -->
                                <div class="col-sm-12"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv-WwyCAZ5rJArnCELEtTalFrSBmcyLgk&libraries=places&v=weekly&callback=initMap"></script>


    <script type="text/javascript">
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('search_input'));
        });
    </script>

    <script>

        // call back function google map

        function initMap() {
            initialize();
            setlatlong(parseFloat($("#longitude").val()), parseFloat($("#latitude").val()));
        }

        // location change by marker

        function setlatlong(longitude, latitude) {

            const myLatLng = {lat: latitude, lng: longitude};
            const map = new google.maps.Map(document.getElementById("googleMap"), {zoom: 15, center: myLatLng});

            var marker = new google.maps.Marker({
                position: myLatLng,
                map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                title: "Select Your Location!",
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
            console.log(pos)
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
                // debugger
                var addresss = document.getElementById("search_input1").value;
                var places = autocomplete.getPlace();
                $("#longitude").val(places.geometry.location.lng());
                $("#latitude").val(places.geometry.location.lat());
                setlatlong(places.geometry.location.lng(), places.geometry.location.lat());
            });

        }
    </script>



@endsection
