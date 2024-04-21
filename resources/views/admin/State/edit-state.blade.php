@extends('layouts.admin.master')
@section('body')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-md-10">
                            Edit State
                        </h4>
                        <a class="btn btn-block btn btn-outline-primary col-md-2"
                           href="{{route('state.index')}}">
                            View States
                        </a>
                    </div>
                    <form class="forms-sample"
                          action="{{route('state.update', [base64_encode($state->id)])}}"
                          method="POST"
                    >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="state">State</label>
                            <input
                                type="text"
                                class="form-control"
                                id="state"
                                placeholder="State"
                                name="state"
                                value="{{$state->state}}"
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
                                {{$state->status == 1 ? 'checked' : ''}}
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




