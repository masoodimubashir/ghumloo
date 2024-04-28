@extends('layouts.front.master')
@section('body')

    <!-- TOP SEARCH BOX -->
    <section>
        <div class="search-top pop pop-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ban-search form-select">
                            <form>
                                <ul>
                                    <li class="sr-look">
                                        <div class="form-group">
                                            <label>Your destination</label>
                                            <select class="chosen-select">
                                                <option>Your destination</option>
                                                <option>Any location</option>
                                                <option>Chennai</option>
                                                <option>New york</option>
                                                <option>Perth</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-gue">
                                        <div class="form-group">
                                            <label>Package</label>
                                            <select class="chosen-select">
                                                <option>Package</option>
                                                <option>Family Package</option>
                                                <option>Honeymoon Package</option>
                                                <option>Group Package</option>
                                                <option>WeekEnd Package</option>
                                                <option>Regular Package</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Check in</label>
                                            <input type="text" class="form-control datepicker" name="from"
                                                   placeholder="Check in">
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Check out</label>
                                            <input type="text" class="form-control datepicker" name="to"
                                                   placeholder="Check out">
                                        </div>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit" value="Search">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <span class="menu-pop-clo pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
    </section>
    <!-- END TOP SEARCH BOX -->



    <!--DASHBOARD-->
    <section>
        <div class="db">
            <!--LEFT SECTION-->
            <div class="db-l">
                <div class="db-l-1">

                    <ul>


                        <li>
                            <div id="imagePreview">
                                @if(session('user')->image)
                                    <img class="" src="{{asset('storage/' . session('user')->image)}}" alt="Default Image">
                                @else
                                    <img class="" src="{{asset('Logo/placeholder.jpg')}}"
                                         alt="Default Image">

                                @endif
                            </div>
                        </li>

                    </ul>

                </div>
                <div class="db-l-2">
                    <ul>
                        <li>
                            <a href="{{ route('user.view-profile') }}">
                                <img src="old/images/icon/dbl6.png" alt=""/> My Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('user.update-password-view') }}">
                                <img src="old/images/icon/dbl6.png" alt=""/>Passwords</a>
                        </li>
                        <li>
                            <a href="dashboard.html"><img src="images/icon/dbl1.png" alt=""/> All
                                Bookings</a>
                        </li>
                        <li>
                            <a href="{{ route('user.view-travel-booking') }}"><img src="images/icon/dbl2.png"
                                                                                   alt=""/> Travel
                                Bookings</a>
                        </li>
                        <li>
                            <a href="{{ route('user.view-hotel-booking') }}"><img src="images/icon/dbl3.png"
                                                                                  alt=""/>
                                Hotel Bookings</a>
                        </li>
                        <li>
                            <a href="{{ route('user.view-event-booking') }}">
                                <img src="images/icon/dbl4.png" alt=""/> Event
                                Bookings</a>
                        </li>

                        <li>
                            <a href="{{ route('user.view-payments') }}"><img src="images/icon/dbl9.png" alt=""/>
                                Payments</a>
                        </li>
                        <li>
                            <a href="{{ route('user.view-claimrefund') }}"><img src="images/icon/dbl7.png" alt=""/>
                                Claim &
                                Refund</a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"><img src="images/icon/dbl7.png" alt=""/>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CENTER SECTION-->
            @yield('user-dashboard')
            <!--RIGHT SECTION-->
            {{--            <div class="db-3">--}}
            {{--                <h4>Notifications</h4>--}}
            {{--                <ul>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr1.jpg" alt="" />--}}
            {{--                            <h5>50% Discount Offer</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr2.jpg" alt="" />--}}
            {{--                            <h5>paris travel package</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr3.jpg" alt="" />--}}
            {{--                            <h5>Group Trip - Available</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr4.jpg" alt="" />--}}
            {{--                            <h5>world best travel agency</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr5.jpg" alt="" />--}}
            {{--                            <h5>special travel coupons</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr6.jpg" alt="" />--}}
            {{--                            <h5>70% Offer 2018</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr7.jpg" alt="" />--}}
            {{--                            <h5>Popular Cities</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="#!"> <img src="images/icon/dbr8.jpg" alt="" />--}}
            {{--                            <h5>variations of passages</h5>--}}
            {{--                            <p>All the Lorem Ipsum generators on the</p>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
        </div>
    </section>
    <!--END DASHBOARD-->

@endsection
