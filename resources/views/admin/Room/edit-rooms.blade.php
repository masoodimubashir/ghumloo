@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Edit Rooms</h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2" href="{{route('room.index')}}">
                            View Rooms
                        </a>
                    </div>
                    <form class="forms-sample" action="{{route('room.update', [$room->id])}}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="bed_type">Room Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="room_type"
                                placeholder="Room Type"
                                name="room_type"
                                value="{{$room->room_type}}"
                            >
                        </div>


                        <div class="form-switch mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                role="switch"
                                id="status"
                                value="1"
                                {{$room->status == 1 ? 'checked' : ''}}
                            >
                            <label class="form-check-label" for="status">Status</label>
                        </div>


                        <br>

                        <button type="submit" class="btn btn-primary me-2 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




