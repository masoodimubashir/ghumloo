@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Locations</h4>
                        <button
                            type="button"
                            id="myBtn"
                            class="btn rounded btn-outline-primary col-md-2 text-center">
                            Create Location
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($locations->isNotEmpty())
                                @foreach($locations as $location)
                                    <tr>
                                        <td>{{$location->country}}</td>
                                        <td>{{$location->city}}</td>
                                        <td>{{$location->state}}</td>
                                        <td>
                                            @if($location->status == 0)

                                                <label class="badge badge-danger">
                                                    PENDING
                                                </label>
                                            @else
                                                <label class="badge badge-success">
                                                    Active
                                                </label>
                                            @endif
                                        </td>
                                        <td>
                                            <a
                                                class="btn btn-outline-info rounded-circle p-1"
                                                href="{{route('location.edit', [base64_encode($location->id)])}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{$location->id}}"
                                                  action="{{ route('location.destroy', [base64_encode($location->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$location->id}}').submit();"
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
                        <li class="page-item {{ $locations->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $locations->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $locations->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $locations->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @section('form')
        <form class="forms-sample" action="{{route('location.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
            </div>

            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" name="status" id="status" autocomplete="off">
                <label class="btn btn-sm btn-outline-success rounded" for="status">Status</label>
            </div>

            <br>

            <button type="submit" class="btn  rounded btn-primary me-2 mt-3">Submit</button>

        </form>
    @endsection

@endsection



