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
                           href="{{route('city.index')}}">
                            View Cities
                        </a>
                    </div>
                    <form class="forms-sample"
                          action="{{route('city.update', [base64_encode($city->id)])}}"
                          method="POST"
                    >
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" value="{{$city->city}}" id="city"
                                       placeholder="City" name="city">
                            </div>
                            <div class="col-md-6">
                                <label>Select State</label>
                                <select name="state_id" class="form-select">
                                    @foreach($states as $state)
                                        <option
                                            {{$city->state->id === $state->id ? 'selected' : ''}}
                                            value="{{$state->id}}">
                                            {{$state->state}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" {{$city->status === 1 ? 'checked' : ''}} class="btn-check" name="status" id="btncheck1" autocomplete="off">
                            <label class="btn btn-sm btn-outline-success rounded" for="btncheck1">Status</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary me-2 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




