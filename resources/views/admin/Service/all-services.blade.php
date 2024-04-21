@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Services</h4>
                        <button
                            type="button"
                            id="myBtn"
                            class="btn rounded btn-outline-primary col-md-2 text-center">
                            Create Service
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Service Type</th>
                                <th>Status</th>
                                <th>Icon</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($services->isNotEmpty())
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$service->service}}</td>
                                        <td>{!!  $service->icon !!}</td>

                                        <td>
                                            @if($service->status == 0)

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
                                                href="{{route('service.edit', [base64_encode($service->id)])}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{$service->id}}"
                                                  action="{{ route('service.destroy', [base64_encode($service->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$service->id}}').submit();"
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
                        <li class="page-item {{ $services->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $services->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $services->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $services->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @section('form')
        <form action="{{route('service.store')}}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group mt-2">
                <label for="service">Service</label>
                <input type="text" class="form-control" id="service" placeholder="Service" name="service" required>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Icon" id="icon" name="icon" required></textarea>
                <label for="icon">Icon</label>
            </div>

            <div class="btn-group mt-4" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" name="status" id="status" autocomplete="off">
                <label class="btn btn-sm btn-outline-success rounded" for="status">Status</label>
            </div>

            <br>

            <button type="submit" class="btn btn-primary me-2 mt-3">Submit</button>
        </form>
    @endsection

@endsection



