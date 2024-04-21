@extends('layouts.front.master')
@section('body')
    <!--HEADER SECTION-->
    <section>
        <div class="tourz-search">
            <div class="container">
                <div class="row">

                    <div class="tourz-search-1">
                        <ul class="icons">
                            <li>
                                <img src="{{ asset('old/images/icon/hotel.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/hotel.png') }}" alt="">
                                <strong>Hotel</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/airplane.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/airplane.png') }}" alt="">
                                <strong>Flights</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/train.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/train.png') }}" alt="">
                                <strong>Trains</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/transport.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/transport.png') }}" alt="">
                                <strong>Bus</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/calendar.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/calendar.png') }}" alt="">
                                <strong>Events</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/video.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/video.png') }}" alt="">
                                <strong>Movies</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/restaurant.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/restaurant.png') }}" alt="">
                                <strong>Restaurants</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/classic.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/classic.png') }}" alt="">
                                <strong>Gamming</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/sports.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/sports.png') }}" alt="">
                                <strong>Sports</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/museum.png') }}" alt="">
                                <img src="{{ asset('old/images/icon/museum.png') }}" alt="">
                                <strong>Meseum</strong>
                            </li>
                        </ul>

                        <div class="ban-search form-select pop pop-search">
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
                                            <label>Age</label>
                                            <input type="text" class="form-control datepicker" name="from"
                                                placeholder="Check in">
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Age</label>
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
        </div>
    </section>
    <!--END HEADER SECTION-->

    <section>
        <div class="rows tb-space pad-bot-redu tb-space">
            <div class="container">
                <div class="tourz-hom-ser">
                    <ul class="slider-all">
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-1">
                                <h2>Book your<span>Travel package</span></h2>
                                <a href="booking-tour-package.html" class="cta-1">Book now</a>
                                <img src="images/home-1.png" loading="lazy" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-2">
                                <h2>Book your<span>Car Rentals</span></h2>
                                <a href="booking-car-rentals.html" class="cta-1">Book now</a>
                                <img src="images/home-2.png" loading="lazy" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-3">
                                <h2>Explore<span>Destinations </span></h2>
                                <a href="destinations.html" class="cta-1">Explore</a>
                                <img src="images/home-3.png" loading="lazy" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-4">
                                <h2>Over 30,000+<span>Hotels</span></h2>
                                <a href="hotels-list.html" class="cta-1">Book now</a>
                                <img src="images/home-4.png" loading="lazy" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-5">
                                <h2>Travel Events <span>Events</span></h2>
                                <a href="events.html" class="cta-1">Explore</a>
                                <img src="images/home-5.png" loading="lazy" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Destinations</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
                </div>
                <!-- CITY -->
                <div class="col-md-6">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Europe</h5>
                                <p><span>12 Packages</span> Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Dubai</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>India</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Usa</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/home4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>London</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="rows pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Tour <span>Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <ul class="multiple-items">
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/8.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Family package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/7.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Honeymoon package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/12.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Group package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/4.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Friends package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/2.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Solo package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/18.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Adventure package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/11.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Religious package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="images/places/1.jpg" alt="">
                                    <div class="hom-pack-deta">
                                        <h2>Water sports package</h2>
                                        <h4><span>20+</span> destinations</h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="hotel-details.html" class="fclick"></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows hom-hotels tb-space pad-top-o">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular <span>Destinations</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <ul class="multiple-items7">
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/10.jpg" alt="" loading="lazy">
                                    <h4>Taj Mahal</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Symbol of love</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/11.jpg" alt="" loading="lazy">
                                    <h4>Open House</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach & Historical</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/19.jpg" alt="" loading="lazy">
                                    <h4>Eiffel Tower</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Historical places</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/17.jpg" alt="" loading="lazy">
                                    <h4>Rio de Janeiro</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Historical places</span>
                                    <span class="cta-3-sml">More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/18.jpg" alt="" loading="lazy">
                                    <h4>Mauritius</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach places</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/22.jpg" alt="" loading="lazy">
                                    <h4>Burj khalifa</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Modern architecture</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== SECTION: FREE CONSULTANT ==========-->
    <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i></span> <span
                                class="ol-4">Standardized Budget Packages</span> <span class="ol-3"></span> <span
                                class="ol-5">$99/-</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis1.png" alt="">
                                    </a><span>Free WiFi</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis2.png" alt=""> </a><span>Breakfast</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis3.png" alt=""> </a><span>Pool</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis4.png" alt=""> </a><span>Television</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis5.png" alt=""> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span>
                            </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span>
                                <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span
                                    class="or-25"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== EVENTS ==========-->
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">

                <div class="spe-title">
                    <h2>Top <span>Events</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages
                        and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.."
                    title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Time</th>
                            <th class="e_h1">Location</th>
                            <th>Book</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/iplace-1.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">Taj Mahal,Agra, India</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="images/iplace-2.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">Salesforce Summer, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="images/iplace-3.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">JAPAN</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Switzerland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="images/iplace-5.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="images/iplace-6.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="images/iplace-7.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">Eiffel Tower, Paris</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">France</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="images/iplace-8.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">PARIS - ROUBAIX, England</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">England</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><img src="images/iplace-9.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">Dubai Beach Resort, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html"
                                    class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--====== POPULAR TOUR PLACES ==========-->
    <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Sight Seeing</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel
                        packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 1 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place2.jpg" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a
                                href="tour-details.html" class="link-btn">more info</a>
                        </div>
                    </div>
                    <!-- POPULAR PLACES 2 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place1.jpg" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a
                                href="tour-details.html" class="link-btn">more info</a>
                        </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 3 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place3.jpg" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a
                                href="tour-details.html" class="link-btn">more info</a>
                        </div>
                    </div>
                    <!-- POPULAR PLACES 4 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place4.jpg" alt="" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a
                                href="tour-details.html" class="link-btn">more info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="ho-popu tb-space pad-bot-redu">
            <div class="rows container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Branding</span> for this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="ho-popu-bod">
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Hotels</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/1.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Taaj Club House</h5> <span>City: illunois, United States</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/2.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/3.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/4.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/hotels/8.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Packages</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/2.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13
                                                Nights</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/3.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/4.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Reviewers</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/1.jpg"
                                                alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                                aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/2.png"
                                                alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                                aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/3.jpg"
                                                alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                                aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/4.jpg"
                                                alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                                aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="images/reviewer/5.jpg"
                                                alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right"
                                                aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="images/mobile.png" alt="" />
                </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h2>Have you tried our mobile app?</h2>
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel
                            packages and enjoy your holidays with distinctive experience</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and
                                Reviews</li>
                        </ul>
                        <a href="#"><img src="images/android.png" alt=""> </a>
                        <a href="#"><img src="images/apple.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
