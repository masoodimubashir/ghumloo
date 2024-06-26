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
        <!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <div class="spe-title tit-inn-pg">
                    <h1>{{$package->package_name}}</h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
                    <ul>
                        <li><a href="{{route('front.home')}}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li>
                            <a href="#" class="bread-acti">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <section>
        <div class="rows banner_book" id="inner-page-title">
            <div class="container">
                <div class="banner_book_1">
                    <ul>
                        <li class="dl1">Location :
                            @foreach($package->hotels->take(2) as $hotel)
                                {{$hotel->city->city}}
                            @endforeach

                        </li>
                        <li class="dl2">Price : <i
                                class="fa-solid fa-indian-rupee-sign"></i> {{$package->package_price}}</li>
                        <li class="dl3">Duration : {{$package->total_stay_period}} D / {{$package->total_stay_period -1 }} N</li>
                        <li class="dl4"><a href="booking.html">Book Now</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-8 tour_lhs">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>The Best of {{$package->package_name}}
                            <span class="tour_star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </span>
                            <span class="tour_rat">4.5</span>
                        </h2>
                    </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Short Description</h3>
                        <p>
                            {{$package->short_description}}
                        </p>
                        <h3>Description</h3>
                        <p>
                            {{$package->description}}
                        </p>
                    </div>
                    <!--====== ROOMS: HOTEL BOOKING ==========-->
                    <div class="tour_head1 hotel-book-room">
                        <h3>Photo Gallery</h3>
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators carousel-indicators-1">
                                @php
                                    $images = explode(',', $package->images);
                                @endphp
                                @foreach($images as $key => $image)
                                    <li data-target="#myCarousel1" data-slide-to="{{ $key }}"
                                        class="{{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $image) }}" alt="Chania">
                                    </li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner carousel-inner1" role="listbox">
                                @foreach($images as $key => $image)
                                    <div class="item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $image) }}" alt="Chania" width="460"
                                             height="345">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>

                    <!--====== TOUR LOCATION ==========-->
                    <div class="tour_head1 tout-map map-container">
                        <h3>Location</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780"
                            allowfullscreen></iframe>
                    </div>
                    <!--====== ABOUT THE TOUR ==========-->
                    {{--                    <div class="tour_head1">--}}
                    {{--                        <h3>About The Tour</h3>--}}
                    {{--                        <table>--}}
                    {{--                            <tr>--}}
                    {{--                                <th>Places covered</th>--}}
                    {{--                                <th class="event-res">Inclusions</th>--}}
                    {{--                                <th class="event-res">Exclusions</th>--}}
                    {{--                                <th>Event Date</th>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>Rio De Janeiro ,Brazil</td>--}}
                    {{--                                <td class="event-res">Accommodation</td>--}}
                    {{--                                <td class="event-res">Return Airfare & Taxes</td>--}}
                    {{--                                <td>Nov 12, 2017</td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>Iguassu Falls </td>--}}
                    {{--                                <td class="event-res">8 Breakfast, 3 Dinners</td>--}}
                    {{--                                <td class="event-res">Arrival & Departure transfers</td>--}}
                    {{--                                <td>Nov 14, 2017</td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>Peru,Lima </td>--}}
                    {{--                                <td class="event-res">First-class Travel</td>--}}
                    {{--                                <td class="event-res">travel insurance</td>--}}
                    {{--                                <td>Nov 16, 2017</td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>Cusco & Buenos Aires </td>--}}
                    {{--                                <td class="event-res">Free Sightseeing</td>--}}
                    {{--                                <td class="event-res">Service tax of 4.50%</td>--}}
                    {{--                                <td>Nov 18, 2017</td>--}}
                    {{--                            </tr>--}}
                    {{--                        </table>--}}
                    {{--                    </div>--}}
                    <!--====== DURATION ==========-->
                    {{--                    <div class="tour_head1 l-info-pack-days days">--}}
                    {{--                        <h3>Detailed Day Wise Itinerary</h3>--}}
                    {{--                        <ul>--}}
                    {{--                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                    {{--                                <h4><span>Day : 1</span> Arrival and Evening Dhow Cruise</h4>--}}
                    {{--                                <p>Arrive at the airport and transfer to hotel. Check-in time at the hotel will be at 2:00--}}
                    {{--                                    PM. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the--}}
                    {{--                                    hotel for a comfortable overnight stay.</p>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                    {{--                                <h4><span>Day : 2</span> City Tour and Evening Free for Leisure</h4>--}}
                    {{--                                <p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade--}}
                    {{--                                    Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening,--}}
                    {{--                                    enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable--}}
                    {{--                                    overnight stay.</p>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                    {{--                                <h4><span>Day : 3</span> Desert Safari with Dinner</h4>--}}
                    {{--                                <p>Relish a yummy breakfast and later, proceed to explore the city on your own. Enjoy--}}
                    {{--                                    shopping at Mercato Shopping Mall, Dubai Mall and Wafi City. In the evening, enjoy the--}}
                    {{--                                    desert safari experience and belly dance performance. Relish a mouth-watering barbecue--}}
                    {{--                                    dinner and enjoy staying overnight in Dubai.</p>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                    {{--                                <h4><span>Day : 4</span> Day at leisure</h4>--}}
                    {{--                                <p>Savour a satiating breakfast and relax for a while. Day Free for leisure. Overnight stay--}}
                    {{--                                    will be arranged in Dubai. In the evening, enjoy a tasty dinner on the Dhow cruise.--}}
                    {{--                                    Later, head back to the hotel for a comfortable overnight stay.</p>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                    {{--                                <h4><span>Day : 5</span> Departure</h4>--}}
                    {{--                                <p>Fill your tummy with yummy breakfast and relax for a while. Later, check out from the--}}
                    {{--                                    hotel and proceed for your onward journey.In the evening, enjoy a tasty dinner on the--}}
                    {{--                                    Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    <div>
                        <div class="dir-rat">

                            <div class="dir-rat-inn">
                                <form class="dir-rat-form" action="{{route('user.package-review', [$package->id])}}"
                                      method="POST">
                                    @csrf
                                    <div class="dir-rat-inn dir-rat-title">
                                        <h3>Write Your Rating Here</h3>
                                        <fieldset class="rating">
                                            <input type="radio" id="star5" name="rating" value="5"/>
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="rating" value="4 and a half"/>
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                            <input type="radio" id="star4" name="rating" value="4"/>
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="rating" value="3 and a half"/>
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                            <input type="radio" id="star3" name="rating" value="3"/>
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="rating" value="2 and a half"/>
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                            <input type="radio" id="star2" name="rating" value="2"/>
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="rating" value="1 and a half"/>
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                            <input type="radio" id="star1" name="rating" value="1"/>
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="rating" value="half"/>
                                            <label class="half" for="starhalf"
                                                   title="Sucks big time - 0.5 stars"></label>
                                        </fieldset>

                                    </div>
                                    @error('rating')
                                    <strong class="text-danger">
                                        {{ $message }}
                                    </strong>
                                    @enderror
                                    <div class="form-group col-md-12 pad-left-o">
                                        <textarea placeholder="Write your message" name="comment"></textarea>
                                        @error('comment')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 pad-left-o">
                                        <input type="submit" value="SUBMIT" class="link-btn">
                                    </div>
                                </form>
                            </div>
                            <!--COMMENT RATING-->
                            @foreach($package->reviews as $review)
                                <div class="dir-rat-inn dir-rat-review">
                                    <div class="row">
                                        <div class="col-md-3 dir-rat-left"><img src="images/reviewer/4.jpg" alt="">
                                            <p>
                                                {{$review->user->name}}
                                                <span>{{\Carbon\Carbon::parse($review->created_at)->format('M,d,Y')}}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-9 dir-rat-right">
                                            <div class="dir-rat-star">
                                                @for($i = 0; $i < $review->rating; $i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                            </div>
                                            <p>{{$review->comment}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--COMMENT RATING-->

                        </div>
                    </div>
                </div>
                <div class="col-md-4 tour_rhs">
                    <!--====== SPECIAL OFFERS ==========-->
                    <div class="tour_right tour_offer">
                        <div class="band1"><img src="images/offer.png" alt="" /> </div>
                        <p>Special Offer</p>
                        <h4>$500<span class="n-td">
                                <span class="n-td-1">$800</span>
                            </span>
                        </h4> <a href="booking.html" class="link-btn">Book Now</a>
                    </div>
                    <!--====== TRIP INFORMATION ==========-->
                    <div class="tour_right tour_incl tour-ri-com">
                        <h3>Trip Information</h3>
                        <ul>
                            <li>
                                Location :
                                @forEach($package->hotels->take(3) as $hotel)
                                    {{$hotel->city->city}},
                                @endforEach
                            </li>
                            <li>{{$package->total_stay_period}} Days / {{$package->total_stay_period - 1}} Nights</li>
                            <li>
                                Hotels:
                                @forEach($package->hotels->take(3) as $hotel)
                                    {{$hotel->hotel_name}},
                                @endforEach
                            </li>
                        </ul>
                    </div>
                    <!--====== PACKAGE SHARE ==========-->
                    <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Share This Package</h3>
                        <ul>
                            <li><a href="#"><i style="font-size: 18px" class="fa-brands fa-facebook" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i style="font-size: 18px" class="fa-brands fa-whatsapp" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                    <!--====== HELP PACKAGE ==========-->
                    <div class="tour_right head_right tour_help tour-ri-com">
                        <h3>Help & Support</h3>
                        <div class="tour_help_1">
                            <h4 class="tour_help_1_call">Call Us Now</h4>
                            <h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4>
                        </div>
                    </div>
                    <!--====== PUPULAR TOUR PACKAGES ==========-->
                    <div class="tour_right tour_rela tour-ri-com">
                        <h3>Popular Packages</h3>
                        <div class="tour_rela_1"> <img src="images/related1.png" alt="" />
                            <h4>Dubai 7Days / 6Nights</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                                model text</p> <a href="#" class="link-btn">View this Package</a>
                        </div>
                        <div class="tour_rela_1"> <img src="images/related2.png" alt="" />
                            <h4>Mauritius 4Days / 3Nights</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                                model text</p> <a href="#" class="link-btn">View this Package</a>
                        </div>
                        <div class="tour_rela_1"> <img src="images/related3.png" alt="" />
                            <h4>India 14Days / 13Nights</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                                model text</p> <a href="#" class="link-btn">View this Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const starRating = document.querySelector('.rating');

        starRating.addEventListener('click', (event) => {
            // Get the clicked label element
            const clickedLabel = event.target.closest('label');

            // Check if a label is clicked
            if (clickedLabel) {
                // Get the clicked radio button's value (rating)
                const rating = clickedLabel.previousElementSibling.value;

                // Loop through all labels and update their colors
                starRating.querySelectorAll('label').forEach((label) => {
                    const starValue = label.nextElementSibling.value; // Get associated radio button value
                    label.firstChild.style.color = starValue <= rating ? 'orange' : 'lightgray';
                });
            }
        });

    </script>
@endsection
