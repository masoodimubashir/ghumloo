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
                                <strong>Hotel</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/airplane.png') }}" alt="">
                                <strong>Flights</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/train.png') }}" alt="">
                                <strong>Trains</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/transport.png') }}" alt="">
                                <strong>Bus</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/calendar.png') }}" alt="">
                                <strong>Events</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/video.png') }}" alt="">
                                <strong>Movies</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/restaurant.png') }}" alt="">
                                <strong>Restaurants</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/classic.png') }}" alt="">
                                <strong>Gamming</strong>
                            </li>
                            <li>
                                <img src="{{ asset('old/images/icon/sports.png') }}" alt="">
                                <strong>Sports</strong>
                            </li>
                            <li>
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
                                <h2>Book Your<span>Packages</span></h2>
                                <a href="{{route('front.packages')}}" class="cta-1">Book now</a>
                                <img src="{{asset('old/images/home-3.png')}}" loading="lazy" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="hom-quick-acc hom-quick-acc-2">
                                <h2>Book Your<span>Hotels</span></h2>
                                <a href="{{route('front.hotels')}}" class="cta-1">Book now</a>
                                <img src="{{asset('old/images/home-4.png')}}" loading="lazy" alt="">
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
                    <h2>Popular <span>Hotels</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
                </div>
                {{--                <!-- CITY -->--}}
                @if($hotels->isNotEmpty())
                    @foreach($hotels->take(5) as $hotel)
                        @php
                            $images = explode(',' , $hotel->images)
                        @endphp
                        <div class="col-md-3">
                            <a href="{{route('front.hotel-detail', [$hotel->id])}}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img"><img src="{{asset('storage/' . $images[0])}}" alt="">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>{{$hotel->hotel_name}}</h5>
                                        <strong>
                                            @if($hotel->rooms_count === 1)
                                                {{$hotel->rooms_count}} Room
                                            @else
                                                {{$hotel->rooms_count}} Rooms

                                            @endif
                                        </strong>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                @endif

            </div>
            <h1 class="text-center">
                <a href="{{route('front.hotels')}}">View All Hotels</a>
            </h1>
        </div>
    </section>

    <section>
        <div class="rows pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular <span>Packages</span></h2>
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
                        @if($packages->isNotEmpty())
                            @foreach($packages as $package)
                                @php
                                    $images = explode(',', $package->images)
                                @endphp
                                <li class="col-md-4">
                                    <div class="to-ho-hotel-con pack-new-box">
                                        <div class="to-ho-hotel-con-1">
                                            <img src="{{asset("storage/" . $images[0])}}" alt="">
                                            <div class="hom-pack-deta">
                                                <h2>{{$package->package_name}}</h2>
                                                <h4><span>{{$package->hotels_count}}+</span> destinations</h4>
                                                <span class="cta-2">Book now</span>
                                            </div>
                                        </div>
                                        <a href="{{route("front.package-detail", [$package->id])}}" class="fclick"></a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <h1 class="text-center">
                <a href="{{route('front.packages')}}">View All Packages</a>
            </h1>
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
                            <h4>Top <span>Hotels</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                @foreach($top_hotels->take(10) as $top_hotel)
                                    @php
                                    $images = explode(',' ,$top_hotel->images)
                                        @endphp
                                    <li>
                                        <a href="hotels-list.html">
                                            <div class="hot-page2-hom-pre-1">
                                                <img src="{{asset('storage/' . $images[0])}}" alt="">
                                            </div>
                                            <div class="hot-page2-hom-pre-2">
                                                <h5>{{$top_hotel->hotel_name}}</h5>
                                                <span>City: {{$top_hotel->city->city}}</span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3"><span>{{$top_hotel->star_rating}}</span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

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
