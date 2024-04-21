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
                    <a href="#">Dashboard</a>
                </li>

            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Incomes</h4>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>User Name</th>
                                        <th>Booking ID</th>
                                        <th>Booking Amount</th>
                                        <th>Commission</th>
                                        <th>Referral Commission</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
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
