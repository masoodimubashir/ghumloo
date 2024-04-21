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
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add Hotel Attributes</h2>

            <br>
            <ul class="nav nav-tabs tab-list ">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Room Type</span>
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#menu3">
                        <i class="fa-solid fa-house"></i>
                        <span>Property Type</span>
                    </a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="bor">
                            <form action="{{route('room.create')}}" method="POST">
                                @csrf
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="input-field col s12">
                                        <input
                                            id="room_type"
                                            name="room_type"
                                            type="text"
                                            class="validate">
                                        <label for="room_type">Room Type</label>
                                        @error('room_type')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <p>
                                    <input type="checkbox" name="status" id="room_status"/>
                                    <label for="room_status">Status</label>
                                </p>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div id="menu3" class="tab-pane fade">
                    <div class="bor">
                        <form action="{{route('property.create')}}" method="POST">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="input-field col s12">
                                    <input
                                        id="property_type"
                                        type="text"
                                        name="property_type"
                                        class="validate">
                                    <label for="property_type">Property Type</label>
                                    @error('property_type')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <p>
                                <input type="checkbox" name="status"  id="property_status"/>
                                <label for="property_status">Status</label>
                            </p>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
