@extends('layouts.admin.master')
@section('body')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3 ">
                        <h4 class="card-title col-md-10">Packages</h4>
                        <a href="{{route('package.create')}}" class="btn btn-outline-primary col-md-2">
                            Create Package
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>View Images</th>
                                <th>Package Name</th>
                                <th>Hotel Name</th>
                                <th>Total Stay Period</th>
                                <th>Package Price</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Popular</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            </thead>

                            <tbody>

                            @if($packages->isNotEmpty())
                                @foreach($packages as $package)

                                    @php
                                        $images = explode(',',$package->images)
                                    @endphp

                                    <tr>
                                        <td>
                                            <img src="{{asset('storage/' . $images[0])}}" alt="{{$images[0]}}"/>
                                        </td>
                                        <td>
                                            {{$package->package_name}}
                                        </td>
                                        <td>
                                            <table>
                                                <thead>
                                                <th>Hotel Name</th>
                                                <th>Price Per Stay</th>
                                                <th>Stay Period</th>
                                                </thead>
                                                <tbody>
                                                @foreach($package->hotels as $hotel)
                                                    <tr>
                                                        <td>{{$hotel->hotel_name}} </td>
                                                        <td>{{$hotel->pivot->stay_period}} </td>
                                                        <td>{{$hotel->pivot->price_per_stay}}</td>
                                                    </tr>
                                                    <tr>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>{{$package->total_stay_period}} days</td>
                                        <td>
                                            {{$package->package_price}}
                                        </td>
                                        <td>
                                            {{$package->discount_price}}
                                        </td>
                                        <td>
                                            @if($package->status === 1)
                                                <div class="badge badge-success">Active</div>

                                            @else
                                                <div class="badge badge-danger">Deactivate</div>

                                            @endif
                                        </td>
                                        <td>
                                            @if($package->popular === 1)
                                                <div class="text-success">Popular</div>

                                            @else
                                                <div class="text-danger">Unpopular</div>

                                            @endif
                                        </td>

                                        <td>
                                            <a
                                                class="btn btn-outline-info btn-sm rounded-circle p-1"
                                                href="{{route('package.edit', [base64_encode($package->id)])}}"
                                            >
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <form id="deleteForm{{$package->id}}"
                                                  action="{{ route('package.destroy', [base64_encode($package->id)]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a
                                                    class="btn btn-outline-danger btn-sm rounded-circle p-1"
                                                    href="#"
                                                    onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$package->id}}').submit();"
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
                        <li class="page-item {{ $packages->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link"
                               href="{{ $packages->previousPageUrl() }}">Previous</a>
                        </li>

                        <li class="page-item {{ $packages->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $packages->nextPageUrl() }}">Next</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




