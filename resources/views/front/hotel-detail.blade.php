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
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <div class="spe-title tit-inn-pg">
                    <h1><span>{{$hotel->hotel_name}} Hotel</span></h1>
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
                            {{$hotel->hotel_name}}
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
                        <li class="dl1">Location : {{$hotel->city->state->state}} - {{$hotel->city->city}}</li>
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
                        <h2>
                            {{$hotel->hotel_name}}
                            <span class="tour_star">
                                @for($i=1; $i<=$hotel->star_rating; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            </span>
                            <span class="tour_rat">{{$hotel->star_rating}}</span>
                        </h2>
                    </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1 hotel-com-color">
                        <h3>Description</h3>
                        <p>{{$hotel->description}}</p>
                    </div>
                    <!--====== ROOMS: HOTEL BOOKING ==========-->
                    <div class="tour_head1 hotel-book-room">
                        <h3>Photo Gallery</h3>
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators carousel-indicators-1">
                                @php
                                    $images = explode(',' , $hotel->images);
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
                    <div class="tour_head1">
                        <h3>ROOMS & AVAILABILITIES</h3>
                        <div class="tr-room-type">
                            <ul>
                                @foreach($hotel->rooms as $room)
                                    @php
                                        $services = explode(',' ,$room->services);
                                        $images = explode(',' ,$room->images)
                                    @endphp

                                    <li>
                                        <div class="tr-room-type-list">
                                            <div class="col-md-3 tr-room-type-list-1">
                                                @if($images == Null)
                                                    <img src="" alt=""/>
                                                @else
                                                    <img src="{{asset('storage/' . $images[0])}}" alt=""/>
                                                @endif
                                            </div>
                                            <div class="col-md-6 tr-room-type-list-2">
                                                <h4>{{$room->roomConfiguration->roomType->room_type}}</h4>
                                                <p>
                                                    <b>Amenities:</b>
                                                </p>
                                                <span><b>Includes</b>
                                                   @if($room->breakfast === 1)
                                                        Breakfast,
                                                    @endif
                                                    @if($room->lunch == 1)
                                                        Lunch,
                                                    @endif
                                                    @if($room->dinner === 1)
                                                        Dinner,
                                                    @endif
                                                </span>
                                                <span><b>Maxinum </b> : {{$room->max_persons}} Persons / {{$room->max_children}} Children</span>
                                            </div>
                                            <div class="col-md-3 tr-room-type-list-3">
                                                <span class="hot-list-p3-1">Price Per Night</span>
                                                <span class="hot-list-p3-2">
                                                    <i style="font-size: .8em" class="fa fa-indian-rupee"></i> {{$room->price_per_night}}
                                                </span>
                                                <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book
                                                    Now</a></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--====== AMENITIES ==========-->
                    <div class="tour_head1 hot-ameni">
                        <h3>Property Rules</h3>
                        <ul>
                            @if($hotel->allowed_pets == 1)
                                <li><i class="fa fa-check" aria-hidden="true"></i> Pets Are Allowed</li>
                            @else
                                <li><i class="fa fa-check" aria-hidden="true"></i> Pets Are Not Allowed</li>
                            @endif

                            <li>
                                <i class="fa fa-check" aria-hidden="true">
                                </i>Check In: {{\Carbon\Carbon::parse($hotel->check_in)->format('h:i A')}} - Check Out: {{\Carbon\Carbon::parse($hotel->check_out)->format('h:i A')}}
                            </li>

                        </ul>


                    </div>


                    <!--====== TOUR LOCATION ==========-->
                    <div class="tour_head1 tout-map map-container">
                        <h3>Location</h3>

                        <div class="mapouter">
                            <div id="googleMap" style="width:100%;height:400px;"></div>
                            <input type="hidden" id="longitude" name="longitude"
                                   value="{{ $hotel->longitude }}">
                            <input type="hidden" id="latitude" name="latitude" value="{{ $hotel->latitude }}">
                            <input type="hidden" id="maplocation" name="maplocation" value="{{ $hotel->search_area }}">

                        </div>


                    </div>
                    <div>
                        <div class="dir-rat">
                            <div class="dir-rat-inn">
                                <form class="dir-rat-form" action="{{route('user.hotel-review', [$hotel->id])}}"
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
                            @foreach($hotel->reviews as $review)
                                <div class="dir-rat-inn dir-rat-review">
                                    <div class="row">
                                        <div class="col-md-3 dir-rat-left">
                                            @if(session('user')->$image)
                                                <img style="height: 100px; width: 100px"
                                                     src="{{asset('storage/' . $review->user->image)}}" alt="">
                                            @endif
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
                        <p>Room Price</p>
                        <h4><i class="fa fa-indian-rupee"></i>
                            @foreach($hotel->rooms->sortBy('price_per_night')->take(1) as $room)
                                {{ $room->price_per_night }}
                            @endforeach

                            {{--                            <span class="n-td">--}}
{{--                                <span class="n-td-1">$800</span>--}}
{{--                            </span>--}}
                        </h4> <a href="booking.html" class="link-btn">Book Now</a>
                    </div>
                    <!--====== TRIP INFORMATION ==========-->
                    <div class="tour_right tour_incl tour-ri-com">
                        <h3>Hotel Overview</h3>
                        <ul>
                            <li>Location : {{$hotel->city->city}}</li>
                            <li>Property Type: {{$hotel->propertyType->property_type}}</li>
                            <li>Email:  <strong><a href="tel:{{$hotel->email}}">{{$hotel->email}}</a></strong> </li>
                        </ul>
                    </div>
                    <!--====== PACKAGE SHARE ==========-->
                    <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Share This Package</h3>
                        <ul>
                            <li><a href="#"><i style="font-size: 18px" class="fa-brands fa-facebook"
                                               aria-hidden="true"></i></a></li>
                            <li><a href="#"><i style="font-size: 18px" class="fa-brands fa-google-plus"
                                               aria-hidden="true"></i></a></li>
                            <li><a href="#"><i style="font-size: 18px" class="fa-brands fa-whatsapp"
                                               aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!--====== HELP PACKAGE ==========-->
                    <div class="tour_right head_right tour_help tour-ri-com">
                        <h3>Help & Support</h3>
                        <div class="tour_help_1">
                            <h4 class="tour_help_1_call">Call Us Now</h4>
                            <h4>
                                <i style="font-size: .6em" class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:{{$hotel->phone_one}}">{{$hotel->phone_one}}</a>
                            </h4>
                            <h4>
                                <i style="font-size: .6em" class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:{{$hotel->phone_two}}">{{$hotel->phone_two}}</a>
                            </h4>

                        </div>
                    </div>
                    <!--====== PUPULAR TOUR PACKAGES ==========-->
                    <div class="tour_right tour_rela tour-ri-com">
                        <h3>Top Reviewed Hotels</h3>
                        @foreach($hotels as $hotel)
                            @php
                                $images = explode(',' , $hotel->images)
                            @endphp
                            <div class="tour_rela_1">
                                <img  style="height: 100px; width: 100px; border-radius: 10%;" src="{{asset('storage/' . $images[0])}}" alt="" />
                                <h4>{{$hotel->hotel_name}} -
                                    @foreach($hotel->reviews as $review)
                                        @for($i=1; $i<=$review->rating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    @endforeach
                                </h4>
                            </div>
                        @endforeach
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

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv-WwyCAZ5rJArnCELEtTalFrSBmcyLgk&libraries=places&v=weekly&callback=initMap">
    </script>

    <script>


        function initMap() {
            setlatlong(parseFloat($("#longitude").val()), parseFloat($("#latitude").val()));
        }

        // location change by marker

        function setlatlong(longitude, latitude) {

            const myLatLng = {
                lat: latitude,
                lng: longitude
            };

            console.log(myLatLng)
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                zoom: 15,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                title: $("#maplocation").val(),
            });
        }
    </script>

@endsection
