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
                                            <input type="text" class="form-control datepicker" name="from" placeholder="Check in">
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Check out</label>
                                            <input type="text" class="form-control datepicker" name="to" placeholder="Check out">
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

	<!--====== HOTELS LIST ==========-->
	<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Hotel & Restaurants in Vancouver </h1>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. </p>
					<ul>
                        <li><a href="{{route('front.home')}}">Home</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="{{route('front.hotels')}}" class="bread-acti">Hotels & Restaurants</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						<!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
							<h3>Suggesting Hotels</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
                                @if($hotels->isNotEmpty())
                                    @foreach($hotels->take(5) as $hotel)
                                        @php
                                            $images = explode(',' ,$hotel->images)
                                        @endphp
                                            <!--LISTINGS-->
                                        <li>
                                            <a href="{{route('front.hotel-detail', [$hotel->id])}}">
                                                <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"><img
                                                        src="{{asset('storage/' . $images[0])}}" alt=""></div>
                                                <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                    <h5>{{$hotel->hotel_name}}</h5> <span>{{$hotel->city->city}}</span>
                                                </div>
                                                <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"><span>{{$hotel->star_rating}} &nbsp; Stars</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!--LISTINGS-->
                                    @endforeach
                                @endif
							</ul>
						</div>
						<!--PART 7 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Travel Available Check</h4>
							<div class="hot-room-ava-check">
							<form class="package-form">
							<div class="row">
								<div class="form-group col-md-6">
									<label>Min Price</label>
                                    <select class="chosen-select" name="min_price">
										<option value="" disabled selected>Min</option>
                                        <option value="0">0</option>
                                        <option value="4000">4000</option>
                                        <option value="6000">6000</option>
                                        <option value="8000">8000</option>
                                        <option value="10000">10,000</option>
                                        <option value="20000">20,000</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label>Max Price</label>
                                    <select class="chosen-select" name="max_price">
										<option value="" disabled selected>Max</option>
                                        <option value="5000">5000</option>
                                        <option value="10000">10000</option>
                                        <option value="15000">15000</option>
                                        <option value="20000">20000</option>
                                        <option value="25000">25000</option>
                                        <option value="50000">50000</option>
									</select>
                                </div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Check in</label>
									<input type="text" class="form-control datepicker" name="from" placeholder="Select date">
								</div>
								<div class="form-group col-md-6">
									<label>Check out</label>
									<input type="text" class="form-control datepicker" name="to" placeholder="Select date">
								</div>
							</div>
						</form>
							</div>
						</div>

						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-star-o" aria-hidden="true"></i> Select Ratings</h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                <form id="starForm">
                                    @csrf
									<ul>
										<li>
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5"/>
                                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half"/>
                                                <label class="half" for="star4half"
                                                       title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4"/>
                                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half"/>
                                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3"/>
                                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half"/>
                                                <label class="half" for="star2half"
                                                       title="Kinda bad - 2.5 stars"></label>
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
										</li>
									</ul>
								</form>
							</div>
						</div>
						<!--END PART 5 : LEFT LISTINGS-->
						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-heart-o" aria-hidden="true"></i> Hotel Amenities</h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
								<form>
									<ul>
										<li>
											<div class="chbox">
												<input id="chp1" type="checkbox" checked="">
												<label for="chp1"> Swimming pools </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp2" type="checkbox">
												<label for="chp2"> Wi-Fi & Computer </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp3" type="checkbox">
												<label for="chp3"> Kitchen facilities </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp4" type="checkbox">
												<label for="chp4"> Music & GYM </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp5" type="checkbox">
												<label for="chp5"> Dining </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp6" type="checkbox">
												<label for="chp6"> Cab </label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp7" type="checkbox">
												<label for="chp7"> Breakfast free </label>
											</div>
										</li>
									</ul>
								</form> </div>
						</div>
						<!--END PART 7 : LEFT LISTINGS-->
					</div>
					<!--END LEFT LISTINGS-->
					<!--RIGHT LISTINGS-->
					<div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
							<!--LISTINGS-->
							<div class="row">

								<!--LISTINGS START-->
                                <div id="hotelListContainer">

                                    @if($hotels->isNotEmpty())
                                        @foreach($hotels as $hotel)
                                            @php
                                                $images = explode(',' , $hotel->images)
                                            @endphp
                                            <div class="hot-page2-alp-r-list">
                                                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                                    <a href="javascript:void(0);">
                                                        <div class="hotel-list-score">{{$hotel->star_rating}}&nbsp;<i
                                                                style="font-size: .9em;" class="fa fa-star"></i></div>
                                                        <div class="hot-page2-hli-1">
                                                            <img src="{{asset('storage/' . $images[0])}}" alt="">
                                                        </div>
                                                        <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available
                                                            Rooms: {{$hotel->rooms_count}} </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="hot-page2-alp-ri-p2"><a
                                                            href="{{route('front.hotel-detail', [$hotel->id])}}">
                                                            <h3>{{$hotel->hotel_name}}</h3></a>
                                                        <ul>
                                                            <li>{{$hotel->search_area}}</li>
                                                            <li>{{$hotel->phone_one}}, {{$hotel->phone_two ?? ''}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hot-page2-alp-ri-p3">
                                                        <div class="hot-page2-alp-r-hot-page-rat">25%Off</div>
                                                        <span class="hot-list-p3-1">Price Starting From</span>
                                                        <span class="hot-list-p3-2">
                                                        @foreach($hotel->rooms as $room)
                                                                <i style="font-size: .8em"
                                                                   class="fa fa-indian-rupee"></i> {{$room->price_per_night}}
                                                            @endforeach
                                                    </span>
                                                        <span class="hot-list-p3-4">
												<a href="{{route('front.hotel-detail', [$hotel->id])}}"
                                                   class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
                                                </div>

                                            </div>

                                        @endforeach

                                    @endif
                                </div>
								<!--END LISTINGS-->

                            </div>
                            <div class="pagination mt-4">
                                <li class="page-item {{ $hotels->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link"
                                       href="{{ $hotels->previousPageUrl() }}">Previous</a>
                                </li>

                                <li class="page-item {{ $hotels->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $hotels->nextPageUrl() }}">Next</a>
                                </li>
                            </div>
						</div>
					</div>
					<!--END RIGHT LISTINGS-->
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
                    console.log(label)
                    const starValue = label.nextElementSibling.value; // Get associated radio button value
                    label.firstChild.style.color = starValue <= rating ? 'orange' : 'lightgray';
                });
            }
        });
    </script>

    <script>

        $(document).ready(function () {
            $('#starForm input').on('click', function (event) {
                event.preventDefault();

                let formData = $('#starForm').serialize();

                $.ajax({
                    url: '{{ route('front.hotels') }}',
                    type: 'GET',
                    data: formData,
                    success: function (response) {

                        $('#hotelListContainer').empty();

                        if (response.length > 0) {
                            response.forEach(function (hotel) {

                                let hotelHtml = `


                                <div class="hot-page2-alp-r-list">
                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="{{ url("/hotel-detail/{$hotel->id}") }}">
                                            <div class="hotel-list-score">${hotel.star_rating}&nbsp;<i style="font-size: .9em;" class="fa fa-star"></i></div>
                                            <div class="hot-page2-hli-1">
                                                <img src="{{ asset('storage/') }} . ${hotel.images}" alt="">
                                            </div>
                                            <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: ${hotel.rooms_count} </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hot-page2-alp-ri-p2">
                                            <a href="{{ url("/hotel-detail/{$hotel->id}") }}">
                                                <h3>${hotel.hotel_name}</h3>
                                            </a>
                                            <ul>
                                                <li>${hotel.search_area}</li>
                                                <li>${hotel.phone_one}, ${hotel.phone_two ?? ''}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hot-page2-alp-ri-p3">
                                            <div class="hot-page2-alp-r-hot-page-rat">25%Off</div>
                                            <span class="hot-list-p3-1">Price Starting From</span>
                                            <span class="hot-list-p3-2">
                                                ${hotel.rooms.map(room => `<i style="font-size: .8em" class="fa fa-indian-rupee"></i> ${room.price_per_night}`).join('')}
                                            </span>
                                            <span class="hot-list-p3-4">
                                                <a href="{{ url("/hotel-detail/{$hotel->id}") }}" class="hot-page2-alp-quot-btn">Book Now</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            `;
                                $('#hotelListContainer').append(hotelHtml);
                            });
                        } else {
                            let html = `

                                <div class="hot-page2-alp-r-list" style="padding: 10px; border-radius: 10px;">
                                    Data Not Found
                                </div>
                            `;
                            $('#hotelListContainer').append(html);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('status', status);
                    }
                });
            });
        });
    </script>

@endsection
