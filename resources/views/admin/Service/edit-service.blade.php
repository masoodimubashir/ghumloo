@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">Edit Service</h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2" href="{{route('property.index')}}">
                            View Services
                        </a>
                    </div>
                    <form class="forms-sample" action="{{route('service.update', [$service->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="bed_type">Bed Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="service"
                                placeholder="Service"
                                name="service"
                                value="{{$service->service}}"
                            >
                        </div>

{{--                        <div class="form-floating">--}}
{{--                            <textarea class="form-control" placeholder="Icon" id="icon" name="icon" required>--}}
{{--                                {{$service->icon}}--}}
{{--                            </textarea>--}}
{{--                            <label for="icon">Icon</label>--}}
{{--                        </div>--}}

                        <div class="form-switch mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                role="switch"
                                id="status"
                                value="1"
                                {{$service->status == 1 ? 'checked' : ''}}
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




