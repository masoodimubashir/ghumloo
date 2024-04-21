@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">States</h4>
                        <button
                            type="button"
                            id="myBtn"
                            class="btn rounded btn-outline-primary col-md-2 text-center">
                            Create State
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>State</th>

                                <th>City</th>
                                <th>Status.</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($cites->isNotEmpty())
                                @foreach($cites as $city)
                                    <tr>
                                        <td>{{$city->state->state}}</td>

                                        <td>{{$city->city}}</td>

                                        <td>
                                            @if($city->status === 1)

                                                <label class="badge badge-success">
                                                    Active
                                                </label>
                                            @else
                                                <label class="badge badge-danger">
                                                    InActive
                                                </label>
                                            @endif
                                        </td>
                                        <td>
                                            <a
                                                class="btn btn-outline-info rounded-circle p-1"
                                                href="{{route('city.edit', [base64_encode($city->id)])}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{$city->id}}"
                                                  action="{{ route('city.destroy', [base64_encode($city->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$city->id}}').submit();"
                                                >
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </form>

                                        </td>

                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mt-4">
                        <li class="page-item {{ $cites->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $cites->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $cites->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $cites->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @section('form')
        <form action="{{route('city.store')}}" method="POST" class="forms-sample">
            @csrf
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city" >
                </div>
                <div class="col-md-6">
                    <label>Select State</label>
                    <select name="state_id" class="form-select">
                        @foreach($states as $state)
                            <option value="{{$state->id}}">{{$state->state}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" name="status" id="btncheck1" autocomplete="off">
                <label class="btn btn-sm btn-outline-success rounded" for="btncheck1">Status</label>
            </div>
            <br>

            <button type="submit" class="btn btn-primary me-2 mt-3">Submit</button>
        </form>
    @endsection

@endsection



