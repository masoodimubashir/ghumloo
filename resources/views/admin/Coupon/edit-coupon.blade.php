@section('edit')

@endsection

@php use Carbon\Carbon; @endphp
@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="{{route('coupon-code.index')}}"><i class="fa fa-backward" aria-hidden="true"></i>View Coupons</a>
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
                                      action="{{route('coupon-code.update', [$coupon->id])}}"
                                      method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input value="{{$coupon->name}}" type="text" class="form-control" name="name" id="edit-name" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input value="{{$coupon->code}}" type="text" class="form-control" name="code" id="edit-code" placeholder="Coupon Code">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <select name="type" id="edit-type">
                                                <option
                                                    {{ $coupon->type === 'Percentage' ? 'selected' : '' }}>Percentage</option>
                                                <option
                                                    {{ $coupon->type === 'Amount' ? 'selected' : '' }}>Amount</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <input value="{{$coupon->discount}}" type="number" class="form-control" id="edit-discount" placeholder="discount"
                                                   name="discount">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="valid_from">Valid From:</label>
                                            <input value="{{ \Carbon\Carbon::parse($coupon->valid_from)->format('Y-m-d') }}" type="date" class="form-control" id="edit-valid_from" placeholder="Select a date" name="valid_from">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="valid_to">Valid To:</label>
                                            <input value="{{\Carbon\Carbon::parse($coupon->valid_from)->format('Y-m-d')}}" type="date" class="form-control" id="edit-valid_to" placeholder="Select a date"
                                                   name="valid_to">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check col-md-6">
                                            <input {{$coupon->status === '1' ? 'checked' : ''}}   class="form-check-input" name="status" type="checkbox" id="edit-status">
                                            <label class="form-check-label" for="edit-status">
                                                Status
                                            </label>
                                        </div>
                                        <div class="form-check col-md-6">
                                            <input {{$coupon->status === '1' ? 'checked' : ''}}  class="form-check-input" type="checkbox" id="edit-used_coupon" name="used_coupon">
                                            <label class="form-check-label" for="edit-used_coupon">
                                                One Time
                                            </label>
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

