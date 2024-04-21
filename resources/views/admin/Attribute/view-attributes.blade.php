@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Home
                    </a>
                </li>
                <li class="active-bre">
                    <a href="{{route('view-attributes')}}">
                        View Attribute
                    </a>
                </li>
                <li class="page-back">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-backward" aria-hidden="true"></i>
                        Back
                    </a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>View Hotel Attributes</h2>
            <br>
            <ul class="nav nav-tabs tab-list ">
                @if($room_types->isNotEmpty())
                    <li class="active">
                        <a data-toggle="tab" href="#home">
                            <i class="fa fa-info" aria-hidden="true"></i>
                            <span>Room Type</span>
                        </a>
                    </li>
                @endif




                @if($property_types->isNotEmpty())
                    <li>
                        <a data-toggle="tab" href="#menu3">
                            <i class="fa-solid fa-house"></i>
                            <span>Property Type</span>
                        </a>
                    </li>
                @endif

            </ul>

            <div class="tab-content">
                @if($room_types->isNotEmpty())
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($room_types as $room_type)

                                                    <tr>
                                                        <td>{{$room_type->room_type}}</td>
                                                        <td>{{$room_type->status}}</td>
                                                        <td>
                                                            <a href="#"
                                                               class="editBtn"
                                                               data-toggle="modal"
                                                               data-target="#roomModel"
                                                               data-item-id="{{$room_type->id}}"
                                                               data-item-type="room">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="#">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


                @if($property_types->isNotEmpty())
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($property_types as $property_type)

                                                    <tr>
                                                        <td>{{$property_type->property_type}}</td>
                                                        <td>{{$property_type->status}}</td>
                                                        <td>
                                                            <a href="#" class="editBtn"
                                                               data-toggle="modal"
                                                               data-target="#propertyModel"
                                                               data-item-id="{{$property_type->id}}"
                                                               data-item-type="property">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </a>

                                                        </td>
                                                        <td>
                                                            <a href="#">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Bootstrap Modal for Edit User -->


    @if($room_types->isNotEmpty())
        @include('admin.Attribute.Forms.room-model')
    @endif



    @if($property_types->isNotEmpty())
        @include('admin.Attribute.Forms.property-model')
    @endif


    <script>
        $(document).ready(function () {
            $('.editBtn').click(function (e) {

                e.preventDefault();

                var type = $(this).data('item-type');
                var id = $(this).data('item' + '-id');

                var form = $('form');
                $.ajax({
                    url: 'show-' + type + '/' + id,
                    type: 'GET',
                    // data: {
                    //     type: type,
                    // },
                    success: function (response) {
                        if (response.type === 'room') {
                            populateRoomForm(response.data);

                        } else if (response.type === 'bed') {
                            populateBedForm(response.data);

                        } else if (response.type === 'property') {
                            populatePropertyForm(response.data);

                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
                form.find('input[type=text], textarea').val('');
                form.find('input[type=checkbox]').prop('checked', false);
            });

            function populateRoomForm(data) {
                $('#room_type').val(data.room_type);
                $('#room_status').prop('checked', data.status === '1');
            }



            function populatePropertyForm(data) {
                $('#property_type').val(data.property_type);
                $('#property_status').prop('checked', data.status === '1');
            }
        });
    </script>

@endsection
