




@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Create Package</h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2" href="{{route('package.index')}}">
                            View Packages
                        </a>
                    </div>
                    <form class="forms-sample" action="{{route('package.store')}}" method="POST">

                        @csrf


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="package_name">Package Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="package_name"
                                    placeholder="Package Name"
                                    name="package_name"
                                >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validity">Validity</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="validity"
                                    placeholder="Validity ex ( 1, 2 )"
                                    name="validity"
                                    min="0"
                                >
                            </div>
                        </div>

                        <p id="add_more_id" class="mb-4 mt-2 btn btn-outline-primary btn-sm rounded">
                            Add Hotel
                        </p>

                        <div id="add_more_hotal">

                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label>Select State</label>
                                <select id="state" class="form-select" onchange="fetchCities">
                                    @if($states->isNotEmpty())
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}">{{$state->state}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <label>Select City </label>
                                <select id="city" class="form-select">
                                    <option>Select City</option>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <label>Select Hotel</label>
                                <select id="hotel" name="hotel_id" class="form-select">
                                    <option>Select Hotel</option>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <label>Select Room</label>
                                <select id="room" class="form-select">
                                    <option>Select Room</option>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="stay_period">Stay Period</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="stay_period"
                                    placeholder="Stay Period"
                                    name="stay_period"
                                >
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="price_per_stay">Price Per Stay</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="price_per_stay"
                                    placeholder="Package Name"
                                    name="price_per_stay"
                                    min="0"
                                >
                            </div>
                        </div>

                        <br>

                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="discount_price">Discount</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="discount_price"
                                    placeholder="Discount"
                                    name="discount_price"
                                    min="0"
                                >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="gst">GST</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="gst"
                                    placeholder="GST"
                                    name="gst"
                                    min="0"
                                >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="package_price">Final Price</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="package_price"
                                    placeholder="Package Price"
                                    name="package_price"
                                    min="0"
                                >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="booking_date">Select Date</label>
                                <input type="date" class="form-control" name="booking_date" id="booking_date">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="5"
                                      style="height: 50px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"
                                      style="height: 100px"></textarea>
                        </div>

                        <div class="form-switch mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                role="switch"
                                id="status"
                                value="1"
                            >
                            <label class="form-check-label" for="status">Status</label>
                        </div>

                        <div class="form-switch mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="popular"
                                role="switch"
                                id="popular"
                                value="1"
                            >
                            <label class="form-check-label" for="status">Popular</label>
                        </div>

                        <button type="submit" class="btn btn-primary me-2 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>

        document.addEventListener('DOMContentLoaded', function (){
            var btn = document.getElementById('add_more_id'); // Corrected selection
            btn.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default form submission behavior
                console.log('click');
                var i = 0;

                var html_content = `
            <div class="row">
                <div class="col-md-2 form-group">
                    <label>Select State</label>
                    <select id="state_${i}" class="form-select">
                        @if($states->isNotEmpty())
                @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->state}}</option>
                            @endforeach
                @endif
                </select>
            </div>
            <div class="col-md-2 form-group">
                <label>Select City </label>
                <select id="city_${i}" class="form-select">
                        <option>Select City</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label>Select Hotel</label>
                    <select id="hotel_${i}" name="hotel_id[]" class="form-select">
                        <option>Select Hotel</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label>Select Room</label>
                    <select id="room_${i}" class="form-select">
                        <option>Select Room</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label for="stay_period_${i}">Stay Period</label>
                    <input
                        type="number"
                        class="form-control"
                        id="stay_period_${i}"
                        placeholder="Stay Period"
                        name="stay_period[]"
                    >
                </div>
                <div class="col-md-2 form-group">
                    <label for="price_per_stay_${i}">Price Per Stay</label>
                    <input
                        type="number"
                        class="form-control"
                        id="price_per_stay_${i}"
                        placeholder="Package Name"
                        name="price_per_stay[]"
                        min="0"
                    >
                </div>
            </div>
        `;

                $('#add_more_hotal').append(html_content);
                i = i + 1;
            });
        });
    </script>



    <script>

        document.addEventListener('DOMContentLoaded', function () {

            $('#state').on('change', function () {
                var stateId = $(this).val();
                if (stateId) {
                    $('#city').empty().prop('disabled', true);
                    $('#hotel').empty().prop('disabled', true);
                    $('#room').empty().prop('disabled', true);
                } else {
                    // Clear subsequent selects and disable them
                    $('#city').empty().prop('disabled', true);
                    $('#hotel').empty().prop('disabled', true);
                    $('#room').empty().prop('disabled', true);
                }
            });

            // City change handler
            $('#city').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    // Clear hotel options and disable hotel select
                    $('#hotel').empty().prop('disabled', true);
                    // Clear room options and disable room select
                    $('#room').empty().prop('disabled', true);

                    fetchHotels(cityId); // Fetch hotels based on city
                } else {
                    // Clear subsequent selects and disable them
                    $('#hotel').empty().prop('disabled', true);
                    $('#room').empty().prop('disabled', true);
                }
            });

            // Hotel change handler
            $('#hotel').on('change', function () {
                var hotelId = $(this).val();
                if (hotelId) {
                    // Clear room options and disable room select
                    $('#room').empty().prop('disabled', true);

                    fetchRooms(hotelId); // Fetch rooms based on hotel
                } else {
                    // Clear subsequent selects and disable them
                    $('#room').empty().prop('disabled', true);
                }
            });
        })


        function fetchCities(stateId) {
            $.ajax({
                url: '/admin/city/' + stateId,
                type: 'GET',
                success: function (response) {

                    $('#city').html(response).prop('disabled', false);

                    response.forEach(function (city) {

                        $('#city').append('<option value="' + city.id + '">' + city.city + '</option>');
                    });
                },
                error: function () {
                    console.error('Error fetching cities');
                }
            });
        }

        function fetchHotels(cityId) {

            $.ajax({
                url: '/admin/hotel/' + cityId,
                type: 'GET',
                success: function (response) {

                    $('#hotel').html(response).prop('disabled', false).append(`<option>Select Hotel</option>`);


                    response.forEach(function (city) {


                        city.forEach(hotel => {
                            $('#hotel').append('<option value="' + hotel.id + '">' + hotel.hotel_name + '</option>');
                        })

                    });

                },
                error: function () {
                    console.error('Error fetching hotels');
                }
            });
        }

        function fetchRooms(hotelId) {
            // Make AJAX call to fetch rooms based on hotelId
            $.ajax({
                url: '/admin/room/' + hotelId,
                type: 'GET',
                success: function (response) {
                    $('#room').html(response).prop('disabled', false).append(`<option value="">Select Room</option>`);


                    response.forEach(function (hotel) {

                        hotel.forEach(room => {
                            console.log(room.room_name)
                            $('#room').append('<option value="' + room.id + '">' + room.room_name + '</option>');
                        })

                    });
                },
                error: function () {
                    console.error('Error fetching rooms');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            $('#price_per_stay, #stay_period, #discount_price, #gst').on('input', function () {
                let pricePerStay = parseFloat($('#price_per_stay').val());
                let numberOfStays = parseInt($('#stay_period').val());
                let discount = parseFloat($('#discount_price').val());
                let gst = parseFloat($('#gst').val());

                // Calculate the total price before discount and GST
                let totalPrice = pricePerStay * numberOfStays;

                // Apply discount
                let discountedPrice = totalPrice - discount;

                // Apply GST
                let totalPriceWithGST = discountedPrice + (gst);

                // Set the final price in the input field
                $('#package_price').val(totalPriceWithGST.toFixed(2));
            });
        })


    </script>
@endsection




