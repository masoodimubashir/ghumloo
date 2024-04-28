<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{asset('Logo/logo.png')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('old/css/font-awesome.min.css') }}">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('old/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('old/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('old/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('old/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('old/css/animate.css') }}">
    <!-- <script src="js/html5shiv.js"></script>-->
    {{--         <script src="js/respond.min.js"></script>--}}
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{asset('old/css/custom.css')}}">

</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div class="pop-bg"></div>

<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="main.html"><img src="images/logo.png" alt=""/>
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>Home pages</h4>
                        <ul>
                            <li><a href="booking-all.html">Home page 1</a></li>
                            <li><a href="booking-all.html">Home page 2</a></li>
                            <li><a href="booking-tour-package.html">Home page 3</a></li>
                            <li><a href="booking-hotel.html">Home page 4</a></li>
                            <li><a href="booking-car-rentals.html">Home page 5</a></li>
                            <li><a href="booking-flight.html">Home page 6</a></li>
                            <li><a href="booking-slider.html">Home page 7</a></li>
                        </ul>
                        <h4>Tour Packages</h4>
                        <ul>
                            <li><a href="all-package.html">All Package</a></li>
                            <li><a href="family-package.html">Family Package</a></li>
                            <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                            <li><a href="group-package.html">Group Package</a></li>
                            <li><a href="weekend-package.html">WeekEnd Package</a></li>
                            <li><a href="regular-package.html">Regular Package</a></li>
                            <li><a href="custom-package.html">Custom Package</a></li>
                        </ul>
                        <h4>Sighe Seeings Pages</h4>
                        <ul>
                            <li><a href="destinations.html">Seight Seeing 1</a></li>
                            <li><a href="places-1.html">Seight Seeing 2</a></li>
                            <li><a href="places-2.html">Seight Seeing 3</a></li>
                        </ul>
                        <h4>User Dashboard</h4>
                        <ul>
                            <li><a href="dashboard.html">My Bookings</a></li>
                            <li><a href="db-my-profile.html">My Profile</a></li>
                            <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                            <li><a href="db-travel-booking.html">Tour Packages</a></li>
                            <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                            <li><a href="db-event-booking.html">Event bookings</a></li>
                            <li><a href="db-payment.html">Make Payment</a></li>
                            <li><a href="db-refund.html">Cancel Bookings</a></li>
                            <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                            <li><a href="db-event-details.html">Event booking details</a></li>
                            <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                            <li><a href="db-travel-details.html">Travel booking details</a></li>
                        </ul>
                        <h4>Other pages:1</h4>
                        <ul>
                            <li><a href="tour-details.html">Travel details</a></li>
                            <li><a href="hotel-details.html">Hotel details</a></li>
                            <li><a href="all-package.html">All package</a></li>
                            <li><a href="hotels-list.html">All hotels</a></li>
                            <li><a href="booking.html">Booking page</a></li>
                        </ul>
                        <h4 class="ed-dr-men-mar-top">User login pages</h4>
                        <ul>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login and Sign in</a></li>
                            <li><a href="forgot-pass-2.html">Forgot pass</a></li>
                        </ul>
                        <h4>Other pages:2</h4>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="tips.html">Tips Before Travel</a></li>
                            <li><a href="price-list.html">Price List</a></li>
                            <li><a href="discount.html">Discount</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="sitemap.html">Site map</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li>
                                <a href="mailto:booking@ghumloo.com">Online Support: booking@ghumloo.com</a>
                            </li>
                            <li><a href="tel:+91 9289 030 404">Free Call: +91 9289 030 404</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            <li><span class="sear-pop pop-ini" data-pop="pop-search"><i
                                        class="fa fa-search aria-hidden=" true"></i></span></li>
                            <li>
                                @if(!session('user'))
                                    <a href="{{ route('user.view-login') }}" class="top-sign">Sign In</a>
                                @endif
                            </li>
                            <li>
                                @if(!session('user'))
                                    <a href="{{ route('user.view-signup') }}" class="top-regi">Sign Up</a>
                                @endif
                            </li>
                            <li>
                                @if(session('user'))
                                    <a href="{{ route('user.dashboard') }}" class="top-prof">Profile</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('Logo/logo.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="main-menu">
                        {{--Navbar--}}
                        <ul>
                            <li>
                                <a href="{{ route('front.home') }}">Home</a>
                            </li>
                            <li class="about-menu">
                                <a href="{{ route('front.packages') }}" class="mm-arr">Packages</a>
                            </li>
                            <li class="admi-menu">
                                <a href="{{route('front.seight-seeing')}}" class="mm-arr">Sight Seeing</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li><a href="{{ route('front.hotels') }}">Hotels</a></li>
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            {{-- <li class="cour-menu">
                                <a href="#!" class="mm-arr">All Pages</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Home pages</h4>
                                                <ul>
                                                    <li><a href="booking-all.html">Home page 1</a></li>
                                                    <li><a href="booking-all.html">Home page 2</a></li>
                                                    <li><a href="booking-tour-package.html">Home page 3</a></li>
                                                    <li><a href="booking-hotel.html">Home page 4</a></li>
                                                    <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                                    <li><a href="booking-flight.html">Home page 6</a></li>
                                                    <li><a href="booking-slider.html">Home page 7</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Tour Packages</h4>
                                                <ul>
                                                    <li><a href="all-package.html">All Package</a></li>
                                                    <li><a href="family-package.html">Family Package</a></li>
                                                    <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                    <li><a href="group-package.html">Group Package</a></li>
                                                    <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                    <li><a href="regular-package.html">Regular Package</a></li>
                                                    <li><a href="custom-package.html">Custom Package</a></li>
                                                </ul>
                                                <h4 class="ed-dr-men-mar-top">Sighe Seeings Pages</h4>
                                                <ul>
                                                    <li><a href="destinations.html">Seight Seeing 1</a></li>
                                                    <li><a href="places-1.html">Seight Seeing 2</a></li>
                                                    <li><a href="places-2.html">Seight Seeing 3</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>User Dashboard</h4>
                                                <ul>
                                                    <li><a href="dashboard.html">My Bookings</a></li>
                                                    <li><a href="db-my-profile.html">My Profile</a></li>
                                                    <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                                                    <li><a href="db-travel-booking.html">Tour Packages</a></li>
                                                    <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                                                    <li><a href="db-event-booking.html">Event bookings</a></li>
                                                    <li><a href="db-payment.html">Make Payment</a></li>
                                                    <li><a href="db-refund.html">Cancel Bookings</a></li>
                                                    <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                                    <li><a href="db-event-details.html">Event booking details</a>
                                                    </li>
                                                    <li><a href="db-hotel-details.html">Hotel booking details</a>
                                                    </li>
                                                    <li><a href="db-travel-details.html">Travel booking details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Other pages:1</h4>
                                                <ul>
                                                    <li><a href="tour-details.html">Travel details</a></li>
                                                    <li><a href="hotel-details.html">Hotel details</a></li>
                                                    <li><a href="all-package.html">All package</a></li>
                                                    <li><a href="hotels-list.html">All hotels</a></li>
                                                    <li><a href="booking.html">Booking page</a></li>
                                                </ul>
                                                <h4 class="ed-dr-men-mar-top">User login pages</h4>
                                                <ul>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="login.html">Login and Sign in</a></li>
                                                    <li><a href="forgot-pass-2.html">Forgot pass</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s4">
                                                <h4>Other pages:2</h4>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="events.html">Events</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="tips.html">Tips Before Travel</a></li>
                                                    <li><a href="price-list.html">Price List</a></li>
                                                    <li><a href="discount.html">Discount</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="sitemap.html">Site map</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                            <li>
                                <a href="{{ route('front.contactus') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="al">
                        @if(session('user'))
                            <div class="head-pro pop-ini" data-pop="pop-advi">
                                @if(session('user')->image)
                                    <img src="{{asset('storage/' . session('user')->image)}}" alt="" loading="lazy">
                                @else
                                    <img src="{{asset('Logo/placeholder.jpg')}}" alt="" loading="lazy">
                                @endif
                                <div>
                                    <b>{{session('user')->name}}</b>
                                    <h4>{{session('user')->email}}</h4>
                                </div>
                                <span class="fclick"></span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER & MENU -->
    <div class="menu-pop menu-pop2 pop pop-advi">
        <span class="menu-pop-clo pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/1.jpg" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Ashley emyy</h5>
                    <span>Senior trip advisor</span>
                    <a href="enquiry.html" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <ul class="menu-pop-info">
                <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i>+92 (8800) 68 - 8960</a></li>
                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i>+92 (8800) 68 - 8960</a>
                </li>
                <li><a href="#!"><i class="fa fa-envelope-o" aria-hidden="true"></i>help@company.com</a>
                </li>
                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i>3812 Lena Lane City
                        Jackson Mississippi</a></li>
            </ul>

            <div class="late-news">
                <h4>Latest news</h4>
                <ul>
                    <li>
                        <div class="rel-pro-img">
                            <img src="images/rooms/01.jpg" alt="" loading="lazy">
                        </div>
                        <div class="rel-pro-con">
                            <h5>Long established fact that a reader distracted</h5>
                            <span class="ic-date">12 Dec 2023</span>
                        </div>
                        <a href="hotel-detail.html" class="fclick"></a>
                    </li>
                    <li>
                        <div class="rel-pro-img">
                            <img src="images/rooms/02.jpg" alt="" loading="lazy">
                        </div>
                        <div class="rel-pro-con">
                            <h5>Long established fact that a reader distracted</h5>
                            <span class="ic-date">12 Dec 2023</span>
                        </div>
                        <a href="hotel-detail.html" class="fclick"></a>
                    </li>
                    <li>
                        <div class="rel-pro-img">
                            <img src="images/rooms/04.jpg" alt="" loading="lazy">
                        </div>
                        <div class="rel-pro-con">
                            <h5>Long established fact that a reader distracted</h5>
                            <span class="ic-date">12 Dec 2023</span>
                        </div>
                        <a href="hotel-detail.html" class="fclick"></a>
                    </li>
                    <li>
                        <div class="rel-pro-img">
                            <img src="images/rooms/05.jpg" alt="" loading="lazy">
                        </div>
                        <div class="rel-pro-con">
                            <h5>Long established fact that a reader distracted</h5>
                            <span class="ic-date">12 Dec 2023</span>
                        </div>
                        <a href="hotel-detail.html" class="fclick"></a>
                    </li>
                </ul>
            </div>

            <!-- HELP BOX -->
            <div class="prof-rhs-help">
                <div class="inn">
                    <h3>Tell us your Needs</h3>
                    <p>Tell us what kind of service you are looking for.</p>
                    <a href="register.html">Register for free</a>
                </div>
            </div>
            <!-- END HELP BOX -->
        </div>
    </div>
    <!-- END HEADER & MENU -->
</section>
<!--END HEADER SECTION-->


@yield('body')
<!--====== REQUEST A QUOTE ==========-->

<!--====== REQUEST A QUOTE ==========-->
<!--<section>
    <div class="form tb-space">
        <div class="rows container">
            <div class="spe-title">
                <h2>Book your <span>favourite Package</span> Now!</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                <form id="home_form" name="home_form" action="mail/send.php">
                    <ul>
                        <li>
                            <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                        </li>
                        <li>
                            <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                        </li>
                        <li>
                            <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                        </li>
                        <li>
                            <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                        </li>
                        <li>
                            <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                        </li>
                        <li>
                            <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                        </li>
                        <li>
                            <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                        </li>
                        <li>
                            <input type="submit" value="Submit" id="send_button">
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 family">
                <img src="images/family.png" alt="" />
            </div>
        </div>
    </div>
</section>-->
<!--====== TIPS BEFORE TRAVEL ==========-->
<section>
    <div class="rows tips tips-home tb-space home_title">
        <div class="container tips_1">
            <!-- TIPS BEFORE TRAVEL -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Tips Before Travel</h3>
                <div class="tips_left tips_left_1">
                    <h5>Bring copies of your passport</h5>
                    <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                </div>
                <div class="tips_left tips_left_2">
                    <h5>Register with your embassy</h5>
                    <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                </div>
                <div class="tips_left tips_left_3">
                    <h5>Always have local cash</h5>
                    <p>Donec et placerat ante. Etiam et velit in massa. </p>
                </div>
            </div>
            <!-- CUSTOMER TESTIMONIALS -->
            <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                <!-- TESTIMONIAL TITLE -->
                <h3>Customer Testimonials</h3>
                <div class="testi">
                    <h4>John William</h4>
                    <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum
                        lorem. Aliquam gravida sodales</p>
                    <address>Illinois, United States of America</address>
                </div>
                <!-- ARRANGEMENTS & HELPS -->
                <h3>Arrangement & Helps</h3>
                <div class="arrange">
                    <ul>
                        <!-- LOCATION MANAGER -->
                        <li>
                            <a href="#"><img src="images/Location-Manager.png" alt=""> </a>
                        </li>
                        <!-- PRIVATE GUIDE -->
                        <li>
                            <a href="#"><img src="images/Private-Guide.png" alt=""> </a>
                        </li>
                        <!-- ARRANGEMENTS -->
                        <li>
                            <a href="#"><img src="images/Arrangements.png" alt=""> </a>
                        </li>
                        <!-- EVENT ACTIVITIES -->
                        <li>
                            <a href="#"><img src="images/Events-Activities.png" alt=""> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== FOOTER 1 ==========-->
<section>
    <div class="rows">
        <div class="footer1 home_title tb-space">
            <div class="pla1 container">
                <!-- FOOTER OFFER 1 -->
                <!-- FOOTER OFFER 2 -->
                <!-- FOOTER MOST POPULAR VACATIONS -->
            </div>
        </div>
    </div>
</section>
<!--====== FOOTER 2 ==========-->
<section>
    <div class="rows">
        <div class="footer">
            <div class="container">
                <div class="foot-sec2">
                    <div>
                        <div class="row">
                            <div class="col-sm-3 foot-spec foot-com">
                                <img alt="{{asset('Logo/logo.png')}}" src="{{asset('Logo/logo.png')}}"></img>

                            </div>
                            <div class="col-sm-3 foot-spec foot-com">
                                <h4><span>Address</span> & Contact Info</h4>
                                <p>Golden Palm, Sector 168,
                                    Noida, Uttar Pradesh 201307.</p>
                                <p><span class="strong"> </span> <span
                                        class="highlighted">+91 9289 030 404 <br> +91 9560 690 202</span></p>
                            </div>
                            <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                <h4><span>SUPPORT</span> & HELP</h4>
                                <ul class="two-columns">
                                    <li><a href="#">Feedbacks</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 foot-social foot-spec foot-com">
                                <h4><span>Follow</span> with us</h4>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa-brands fa-google-plus"
                                                       aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--====== FOOTER - COPYRIGHT ==========-->
<section>
    <div class="rows copy">
        <div class="container">
            <p>Copyrights © 2023 Company Name. All Rights Reserved</p>
        </div>
    </div>

</section>

{{-- <section>
    <div class="icon-float">
        <ul>
            <li><a href="#" class="sh">1k <br> Share</a> </li>
            <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</section> --}}
<!--========= Scripts ===========-->
<script src="{{ asset('old/js/jquery-latest.min.js') }}"></script>
<script src="{{ asset('old/js/bootstrap.js') }}"></script>
<script src="{{ asset('old/js/jquery-ui.js') }}"></script>
<script src="{{ asset('old/js/wow.min.js') }}"></script>
<script src="{{ asset('old/js/select-opt.js') }}"></script>
<script src="{{ asset('old/js/slick.js') }}"></script>
<script src="{{ asset('old/js/custom.js') }}"></script>
{{----}}
<script>
    $('.multiple-items').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }]
//
    });
    $('.slider-all').slick({
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }]
//
    });
</script>


</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2024 16:51:00 GMT -->

</html>
