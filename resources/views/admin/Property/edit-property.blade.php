@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Edit Property</h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2" href="{{route('property.index')}}">View Properties</a>
                    </div>
                    <form class="forms-sample" action="{{route('property.update', [$property->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="bed_type">Bed Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="property_type"
                                placeholder="Property Type"
                                name="property_type"
                                value="{{$property->property_type}}"
                            >
                        </div>

                        <div class="form-switch">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                role="switch"
                                id="status"
                                value="1"
                                {{$property->status == 1 ? 'checked' : ''}}
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




