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
                    <form action="{{route('package.update', [$package->id])}}" method="post"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="package_name">Package Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="package_name"
                                    placeholder="Package Name"
                                    name="package_name"
                                    value="{{$package->package_name}}"
                                >
                                @error('package_name')
                                {{ $message }}
                                @enderror
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
                                    value="{{$package->validity}}"
                                >
                                @error('validity')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <a class=" mb-4 mt-2 btn btn-sm btn-outline-primary rounded" id="add_more_id">Add Hotel</a>

                        <div id="add_more_hotal" class="row">
                            <div class="col-md-2 form-group">
                                <label for="state_id0001">Select State</label>
                                <select
                                    class="form-select"
                                    id="state_id0001"
                                    onchange="fetchCities('state_id0001','city_id0001')"
                                >
                                    <option value="">Select State</option>
                                    @if ($states->isNotEmpty())
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->state }}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="city_id0001">Select City</label>
                                <select class="form-select"
                                        id="city_id0001"
                                        onchange="fetchHotels('city_id0001', 'hotel_id0001')"

                                >
                                    <option value="">Select city</option>
                                </select>

                            </div>

                            <div class="col-md-2 form-group">
                                <label for="hotel_id0001">Select Hotel</label>
                                <select class="form-select"
                                        id="hotel_id0001"
                                        name="hotel_id[]"
                                        onchange="fetchRooms('hotel_id0001', 'room_id0001')"
                                >
                                    <option value="">Select Hotel</option>
                                </select>

                                @error('hotel_id')
                                {{ $message }}
                                @enderror
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="room_id0001">Select Room</label>
                                <select class="form-select"
                                        id="room_id0001"
                                >
                                    <option value="">Select Room</option>
                                </select>

                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="duration00">Total Stay</label>
                                <input id="duration00" class="form-control" required placeholder="" name="stay_period[]"
                                       type="text" />

                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="price00">Price Per Stay</label>
                                <input id="price00" class="form-control" placeholder="e.g. 1200" type="number"
                                       name="price_per_stay[]" min="0" required>
                            </div>
                        </div>

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
                                    value="{{$package->discount_price}}"
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
                                    value="{{$package->gst}}"
                                >
                                @error('gst')
                                {{ $message }}
                                @enderror
                            </div>
                            {{--                            <div class="form-group col-md-3">--}}
                            {{--                                <label for="package_price">Final Price</label>--}}
                            {{--                                <input--}}
                            {{--                                    type="number"--}}
                            {{--                                    class="form-control"--}}
                            {{--                                    id="package_price"--}}
                            {{--                                    placeholder="Package Price"--}}
                            {{--                                    name="package_price"--}}
                            {{--                                    min="0"--}}
                            {{--                                >--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-group col-md-3">--}}
                            {{--                                <label for="booking_date">Select Date</label>--}}
                            {{--                                <input type="date" class="form-control" name="booking_date" id="booking_date">--}}
                            {{--                            </div>--}}
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="5"
                                      style="height: 50px">{{$package->short_description}}</textarea>
                            @error('short_description')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"
                                      style="height: 100px">{{$package->description}}</textarea>
                            @error('description')
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

                        <div class="form-switch mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                role="switch"
                                id="status"
                                value="1"
                                {{$package->status === 1 ? 'checked' : ''}}

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
                                {{$package->popular === 1 ? 'checked' : ''}}
                            >
                            <label class="form-check-label" for="status">Popular</label>
                        </div>



                        <button type="submit" class="btn btn-primary me-2 mt-2">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            var i = 0;
            $('#add_more_id').on('click', function () {
                let html_content =
                    `
                    <div class="col-md-2 form-group">
                                    <label for="state_id0001${i}">Select State</label>
                                    <select
                                        class="form-select"
                                        id="state_id0001${i}"
                                        onchange="fetchCities('state_id0001${i}','city_id0001${i}')"
                                    >
                                        <option value="">Select State</option>
                                        @if ($states->isNotEmpty())
                    @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                            @endforeach
                    @endif

                    </select>
                </div>

                <div class="col-md-2 form-group">
                    <label for="city_id0001${i}">Select City</label>
                    <select class="form-select"
                            id="city_id0001${i}"
                            onchange="fetchHotels('city_id0001${i}', 'hotel_id0001${i}')"

                    >
                        <option value="">Select city</option>
                    </select>

                </div>

                <div class="col-md-2 form-group">
                    <label for="hotel_id0001${i}">Select Hotel</label>
                    <select class="form-select"
                            id="hotel_id0001${i}"
                            name="hotel_id[]"
                            onchange="fetchRooms('hotel_id0001${i}', 'room_id0001${i}')"
                    >
                        <option value="">Select Hotel</option>
                    </select>

                </div>

                <div class="col-md-2 form-group">
                    <label for="room_id0001${i}">Select Room</label>
                    <select class="form-select"
                            id="room_id0001${i}"
                    >
                        <option value="">Select Room</option>
                    </select>
                </div>

                <div class="col-sm-2 form-group">
                        <label for="duration00">Total Stay</label>
                        <input id="duration00" class="form-control" placeholder="" name="stay_period[]"
                               type="number" }}">

                </div>

                <div class="col-sm-2 form-group">
                        <label for="price00">Price Per Stay</label>
                        <input id="price00"  class="form-control" placeholder="e.g. 1200" type="number" name="price_per_stay[]">
                </div>
`
                ;

                $('#add_more_hotal').append(html_content);
                i = i + 1;
            });
        });

        function removeFun(varable) {
            $(`.remove${varable}`).remove();
        }
    </script>



    {{--    <script>--}}
    {{--        CKEDITOR.replace('overview', {--}}
    {{--            allowedContent: true,--}}
    {{--            filebrowserUploadUrl: "{{route('uploadImage', ['_token' => csrf_token() ])}}",--}}
    {{--            filebrowserUploadMethod: 'form'--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    @include('admin.pakages.image-script')--}}



    <script>
        // $(document).ready(function() {
        //     var i = 0;
        //     $('#add_more_image').on('click', function() {
        //         var html_content = ` <span class="col-sm-6 form-group">
        //                         <div class="yes">
        //                             <span class="btn_upload">
        //                                 <input  name="image[]" type="file" id="imag${i}"   class="input-img" onchange="AddNewImage('imag${i}','ImgPreview${i}','removeImage1${i}')" />
        //                                 Choose Image
        //                             </span>
        //                             <img id="ImgPreview${i}" src="" class="preview1 pre${i}" />
        //                             <input type="button" id="removeImage1${i}" value="x" class="btn-rmv1 btn${i}" />
        //                         </div>
        //                     </span>`;


        //         $('#image_container').append(html_content);
        //         i = i + 1;
        //     });
        // });




        {{--$(document).ready(function() {--}}
        {{--    var i = 0;--}}
        {{--    $('#add_more_image').on('click', function() {--}}
        {{--        var html_content = ` <span class="col-sm-6 form-group remove${i}">--}}
        {{--                <div class="yes">--}}
        {{--                    <span class="btn_upload">--}}
        {{--                        <input  name="image[]" type="file" id="imag${i}"   class="input-img" onchange="AddNewImage('imag${i}','ImgPreview${i}','removeImage1${i}')" />--}}
        {{--                        Choose Image--}}
        {{--                    </span>--}}
        {{--                    <img id="ImgPreview${i}" src="{{ url('download.jpg')}}" class="preview1 pre${i}" style="width: 100px; height: 100px; border-radius: 5px;"/>--}}
        {{--                    <input type="button" id="removeImage1${i}" value="x" class="btn-rmv1 btn rmv"  onclick="deleteImage('${i}')" />--}}
        {{--                </div>--}}
        {{--            </span>`;--}}


        {{--        $('#image_container').append(html_content);--}}
        {{--        i = i + 1;--}}
        {{--    });--}}
        {{--});--}}




        function deleteImage(varable) {
            $(`.remove${varable}`).remove();
        }
    </script>

    <script>

        function fetchCities(state_id, city_id) {
            let hotel_id = $(`#${state_id}`).val();
            $.ajax({
                url: '/admin/city/' + hotel_id,
                type: 'GET',
                success: function (response) {

                    $(`#${city_id}`).html(response).prop('disabled', false).append(`<option>Select City</option>`);


                    response.forEach(function (city) {

                        $(`#${city_id}`).append('<option value="' + city.id + '">' + city.city + '</option>');
                    });
                },
                error: function () {
                    console.error('Error fetching cities');
                }
            });
        }


        function fetchHotels(city_id, hotel_id) {
            let id = $(`#${city_id}`).val();

            $.ajax({
                url: '/admin/hotel/' + id,
                type: 'GET',
                success: function (response) {

                    $(`#${hotel_id}`).html(response).prop('disabled', false).append(`<option>Select Hotel</option>`);


                    response.forEach(function (city) {
                        city.forEach(hotel => {
                            $(`#${hotel_id}`).append('<option value="' + hotel.id + '">' + hotel.hotel_name + '</option>');
                        })

                    });

                },
                error: function () {
                    console.error('Error fetching cities');
                }
            });
        }

        function fetchRooms(hotel_id, room_id) {
            let id = $(`#${hotel_id}`).val();

            $.ajax({
                url: '/admin/room/' + id,
                type: 'GET',
                success: function (response) {
                    $(`#${room_id}`).html(response).prop('disabled', false).append(`<option value="">Select Room</option>`);


                    response.forEach(function (hotel) {
                        hotel.forEach(room => {
                            console.log(room.room_name)
                            $(`#${room_id}`).append('<option value="' + room.id + '">' + room.room_name + '</option>');
                        })

                    });
                },
                error: function () {
                    console.error('Error fetching rooms');
                }
            });
        }

    </script>

@endsection
