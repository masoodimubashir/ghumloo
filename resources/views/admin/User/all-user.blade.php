@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Hotels</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Email Verified</th>
                                <th>Aadhaar Details</th>
                                <th>Address & Contact Details</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td>
                                        <img src="{{asset('storage/' . $user->image)}}" alt="{{$user->image}}"/>
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->email_verified_at}}
                                    </td>
                                    <td>
                                        @if($user->adhar_verified_at === null)
                                            <strong class="text-danger">Not Verified</strong>
                                        @else
                                            <strong class="text-success">Verified</strong>
                                        @endif <br> <hr>
                                        State: {{$user->aadhaar->state}} <br> <hr>
                                        Phone: {{$user->aadhaar->phone ? $user->aadhaar->phone : 'Not available'}}
                                    </td>
                                    <td>
                                        Phone: {{$user->phone  ?? 'Not Available ' }}
                                    </td>
                                    <td>
                                        <form id="deleteForm{{$user->id}}"
                                              action="{{ route('hotel.destroy', [base64_encode($user->id)]) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a
                                                class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                href="#"
                                                onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$user->id}}').submit();"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <div class="pagination mt-4">
                        <li class="page-item {{ $users->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $users->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $users->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

