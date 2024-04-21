@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Rejected Vendors</h4>
                        <a
                            href="{{route('vendor.index')}}"
                            class="btn rounded btn-outline-primary col-md-2">
                            View Vendors
                        </a>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    User
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Company
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Email Verified
                                </th>
                                <th>
                                    Commission
                                </th>

                                <th>
                                    Restore
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vendors as $vendor)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{asset('storage/' . $vendor->image)}}" alt="{{$vendor->image}}"/>
                                    </td>
                                    <td>
                                        {{$vendor->name}}
                                    </td>
                                    {{--                                    <td>--}}
                                    {{--                                        <div class="progress">--}}
                                    {{--                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"--}}
                                    {{--                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </td>--}}
                                    <td>
                                        {{$vendor->email}}
                                    </td>
                                    <td>
                                        {{$vendor->company_name}}
                                    </td>
                                    <td>
                                        {{$vendor->contact_person_number}}
                                    </td>
                                    <td>
                                        {{$vendor->email_verified_at === null ? 'Not Verified' : 'Verified'}}
                                    </td>
                                    <td>
                                        {{$vendor->commission}}
                                    </td>
                                    <td>
                                        <form id="restoreForm{{$vendor->id}}"
                                              action="{{ route('rejected-vendor.show', [base64_encode($vendor->id)]) }}"
                                              method="get">
                                            @csrf
                                            <a
                                                class="btn btn-outline-success btn-sm rounded-circle p-1"
                                                href="#"
                                                onclick="event.preventDefault();
                                                           document.getElementById('restoreForm{{$vendor->id}}').submit();"
                                            >
                                                <i class="fa-solid fa-box-open"></i>
                                            </a>
                                        </form>
                                    </td>


                                    <td>
                                        <form id="deleteForm{{$vendor->id}}"
                                              action="{{ route('rejected-vendor.destroy', [$vendor->id]) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a
                                                class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                href="#"
                                                onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$vendor->id}}').submit();"
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
                        <li class="page-item {{ $vendors->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $vendors->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $vendors->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $vendors->nextPageUrl() }}">Next</a>
                        </li>
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection

