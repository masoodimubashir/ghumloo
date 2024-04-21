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
                                                        <th>Hotel Name</th>
                                                        <th>Customer Name</th>
                                                        <th>Comment</th>
                                                        <th>Title</th>
                                                        <th>Star Rate</th>
                                                        <th>Date</th>
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

