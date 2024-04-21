@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Vendors</h4>
                        <a href="{{route('rejected-vendor.index')}}"
                           class="btn rounded btn-outline-primary col-md-2 text-center">
                            Rejected Vendors
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
                                    Status
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

                                        @if( $vendor->status==0 || $vendor->status==2)
                                            <a
                                                class="btn btn-sm rounded-circle btn-outline-danger p-1 "
                                                onclick="return askFun('Are you sure De-Active this vendor')"
                                                href="{{route('vendor-update.status',['id'=>base64_encode($vendor->id)])}}">
                                                <i class=" far fa-check-circle text-outline-success"></i>

                                            </a>
                                        @elseif ( $vendor->status==1)
                                            <a
                                                class="btn btn-sm rounded-circle btn-outline-primary p-1"
                                                onclick="return askFun('Are you sure Active this vendor')"
                                                href="{{route('vendor-update.status',['id'=>base64_encode($vendor->id)])}}">
                                                <i class="  fa fa-ban "
                                                   aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        @if( $vendor->status==0)
                                            <a
                                                class=" btn btn-sm rounded-circle btn-outline-info p-1"
                                                onclick="return askFun('Are you sure reject this vendor')"
                                                href="{{url('admin/reject-vender',['id'=>base64_encode($vendor->id)])}}">
                                                <i class=" far fa-times-circle"></i></a>
                                        @endif


                                    </td>

                                    <td>
                                        <form id="deleteForm{{$vendor->id}}"
                                              action="{{ route('vendor.destroy', [base64_encode($vendor->id)]) }}"
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

