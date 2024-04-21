@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre">
                    <a href="#">Stay List</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Coupon List</h4>
                            <button
                                class="btn btn-sm"
                                style="border: none"
                                data-toggle="modal"
                                data-target="#createForm"
                                data-item-type="">
                                Add Stay Period
                            </button>
                        </div>


                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>

                                        <th>Number Of Days To Stay</th>
                                        <th>Discount</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    @if($condition_stays->isNotEmpty())

                                        <tbody>
                                        @foreach($condition_stays as $stay)
                                            <tr>
                                                <td>{{$stay->num_of_days}}</td>
                                                <td>{{$stay->discount . '%'}}</td>
                                                <td>
                                                    <a href="{{route('stay.edit', [$stay->id])}}"
                                                    >
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td>

                                                    <form id="deleteForm{{$stay->id}}"
                                                          action="{{ route('stay.destroy', [$stay->id]) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#"
                                                           onclick="event.preventDefault();
                                                           document.getElementById('deleteForm{{$stay->id}}').submit();"
                                                        >
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>
                                <div class="pagination">
                                    <li class="page-item {{ $condition_stays->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link"
                                           href="{{ $condition_stays->previousPageUrl() }}">Previous</a>
                                    </li>

                                    <li class="page-item {{ $condition_stays->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $condition_stays->nextPageUrl() }}">Next</a>
                                    </li>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @section('form-heading')
            <strong>Coupon</strong>
        @endsection
        @section('create')
            <form id="submitForm" action="{{route('stay.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" min="0" class="form-control" name="num_of_days" id="name"
                               placeholder="Stay Period - @5days">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="discount" id="code" placeholder="Discount Amount">
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>

            </form>
@endsection




@endsection

