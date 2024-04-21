@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li>
                    <a href="index.html">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Home
                    </a>
                </li>
                <li class="active-bre">
                    <a href="#"> Dashboard</a>
                </li>

            </ul>


        </div>

        <div class="row">
            <div class="col-md-3">
                <input type="date" >
            </div>
            <div class="col-md-3">
                <input type="date" >
            </div>
            <div class="col-md-3">
                <select name="property_type">
                    <option disabled selected>Booking Status</option>
                    {{--                                            @if($properties->isNotEmpty())--}}
                    {{--                                                @foreach($properties as $property)--}}
                    {{--                                                    <option--}}
                    {{--                                                        value="{{$property->id}}">{{$property->property_type}}</option>--}}
                    {{--                                                @endforeach--}}
                    {{--                                            @endif--}}

                </select>
            </div>
            <div class="col-md-3">
                <select name="property_type">
                    <option disabled selected>Room Type</option>
                    {{--                                            @if($properties->isNotEmpty())--}}
                    {{--                                                @foreach($properties as $property)--}}
                    {{--                                                    <option--}}
                    {{--                                                        value="{{$property->id}}">{{$property->property_type}}</option>--}}
                    {{--                                                @endforeach--}}
                    {{--                                            @endif--}}

                </select>
            </div>
            <div class="col-md-3">
               <button type="submit" class="btn rounded">Submit</button>

            </div>
        </div>


        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Bookings</h4>
                            <a
                                href="{{route('vendor-hotel.create')}}"
                                class="btn btn-sm"

                            >
                                Add Hotel
                            </a>
                        </div>

                        <div class="tab-inn">
                            <div class="table-responsive">



                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Booked By</th>
                                        <th>Booked Date</th>
                                        <th>Address & Contact Details</th>
                                        <th>Hotel/Suit/Package</th>
                                        <th>Check-In Date</th>
                                        <th>No. of Rooms</th>
                                        <th>No. of Adult</th>
                                        <th>Price</th>
                                        <th>Admin Commission (%)</th>
                                        <th>Booking Status</th>
                                        <th>Payment </th>
                                        <th>Status</th>
                                        <th>Payment Transfer</th>
                                        <th>Remark</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Skin Care & Treatmentaskdjhjkashdjkashdjkashdjkashdjkahdajkhdasjkdhk</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522 loremamsnd,asdasdasdjkashdjkahdkajhsdkajshdkasdhjkasdhaksjdhajksdhakjsdhajksdhajkshdajksdhajksdhasjkdhasjkdhajksdhajksdhasjkhd</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>Australia</td>
                                        <td>
                                            <a href="hotel-edit.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="hotel-edit.html"><i class="fa fa-pencil-square-o"
                                                                         aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
