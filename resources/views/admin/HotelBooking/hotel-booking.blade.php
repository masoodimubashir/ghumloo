@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>

            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Review List</h4>
                        </div>
                        <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    {{--                                @if($rooms->isNotEmpty())--}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box-inn-sp">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Booking Id</th>
                                                        <th>Booking By</th>
                                                        <th>Person Details</th>
                                                        <th>Booking Date</th>
                                                        <th>Hotel/Suit - Package</th>
                                                        <th>No. of Rooms</th>
                                                        <th>No. of Adult</th>
                                                        <th>No. of Child</th>
                                                        <th>Amount</th>
                                                        <th>Wallet</th>
                                                        <th>Amt</th>
                                                        <th>Coupon</th>
                                                        <th>Discount</th>
                                                        <th>Booking By</th>
                                                        <th>Booking Status</th>
                                                        <th>Payment Status</th>
                                                        <th>Payment Transfer</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {{--                                                    @foreach($rooms as $room)--}}
                                                    <tr>
                                                        <td>Abc Hotel</td>
                                                        <td>Mubashir</td>
                                                        <td>Comment</td>
                                                        <td>Title</td>
                                                        <td>5</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>
                                                        <td>12-05-1220</td>


                                                        <td>
                                                            <form id="deleteForm"
                                                                  action=""
                                                                  method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="#"
                                                                   onclick="event.preventDefault(); document.getElementById('deleteForm').submit();">
                                                                    <i class="fa fa-trash-o"
                                                                       aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    {{--                                                    @endforeach--}}

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                @endif--}}
                                    {{--                                <div class="pagination">--}}
                                    {{--                                    <li class="page-item {{ $rooms->onFirstPage() ? 'disabled' : '' }}">--}}
                                    {{--                                        <a class="page-link"--}}
                                    {{--                                           href="{{ $rooms->previousPageUrl() }}">Previous</a>--}}
                                    {{--                                    </li>--}}

                                    {{--                                    <li class="page-item {{ $rooms->hasMorePages() ? '' : 'disabled' }}">--}}
                                    {{--                                        <a class="page-link" href="{{ $rooms->nextPageUrl() }}">Next</a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </div>--}}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

