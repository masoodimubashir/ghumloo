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
                                <th>Status.</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($states->isNotEmpty())
                                @foreach($states as $state)
                                    <tr>
                                        <td>{{$state->state}}</td>
                                        <td>
                                            @if($state->status === 1)

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
                                                href="{{route('state.edit', [base64_encode($state->id)])}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{$state->id}}"
                                                  action="{{ route('state.destroy', [base64_encode($state->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$state->id}}').submit();"
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
                        <li class="page-item {{ $states->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $states->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $states->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $states->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @section('form')
        <form action="{{route('state.store')}}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" placeholder="State" name="state" required>
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



