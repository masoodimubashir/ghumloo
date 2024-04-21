@section('edit')

@endsection

@php @endphp
@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="{{route('admin.dashboard')}}"> Dashboard</a>
                </li>
                <li class="page-back"><a href="{{route('stay.index')}}">
                        <i class="fa fa-backward" aria-hidden="true"></i>View Stay List</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Edit Coupon</h4>
                        </div>

                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <form
                                    action="{{route('stay.update', [$condition_stay->id])}}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="number" value="{{$condition_stay->num_of_days}}" min="0"
                                                   class="form-control"
                                                   name="num_of_days" id="name" placeholder="Stay Period - @5days">
                                            <small class="text-danger">
                                                @error('num_of_days')
                                                {{ $message }}
                                                @enderror
                                            </small>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input type="number" value="{{$condition_stay->discount}}"
                                                   class="form-control" name="discount" id="code"
                                                   placeholder="Discount Amount">
                                            <small class="text-danger">
                                                @error('discount')
                                                {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

