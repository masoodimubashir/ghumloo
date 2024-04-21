@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Beds</h4>
                        <button
                            type="button"
                            id="myBtn"
                            class="btn rounded btn-outline-primary col-md-2 text-center">
                            Create Bed
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Bed Type</th>
                                <th>Status.</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($beds->isNotEmpty())
                                @foreach($beds as $bed)
                                    <tr>
                                        <td>{{$bed->bed_type}}</td>
                                        <td>
                                            @if($bed->status == 0)

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
                                                href="{{route('bed.edit', [base64_encode($bed->id)])}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{$bed->id}}"
                                                  action="{{ route('bed.destroy', [base64_encode($bed->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$bed->id}}').submit();"
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
                        <li class="page-item {{ $beds->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $beds->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $beds->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $beds->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @section('form')
        <form action="{{route('bed.store')}}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label for="bed_type">Bdd Type</label>
                <input type="text" class="form-control" id="bed_type" placeholder="bed Type" name="bed_type" required>
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



