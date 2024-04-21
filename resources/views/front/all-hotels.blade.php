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
						<li><a href="#inner-page-title">Home</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Hotels & Restaurants</a> </li>
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
								<!--LISTINGS-->
								<li>
									<a href="hotel-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotel-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/2.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotel-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotel-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotel-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/8.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.4</span> </div>
									</a>
								</li>
							</ul>
						</div>
						<!--PART 7 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Travel Available Check</h4>
							<div class="hot-room-ava-check">
							<form class="package-form">
							<div>
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
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Min Price</label>
									<select class="chosen-select">
										<option value="" disabled selected>Min</option>
										<option value="1">$200</option>
										<option value="2">$500</option>
										<option value="3">$1000</option>
										<option value="1">$5000</option>
										<option value="1">$10,000</option>
										<option value="1">$50,000</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label>Max Price</label>
									<select class="chosen-select">
										<option value="" disabled selected>Max</option>
										<option value="1">$200</option>
										<option value="2">$500</option>
										<option value="3">$1000</option>
										<option value="1">$5000</option>
										<option value="1">$10,000</option>
										<option value="1">$50,000</option>
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
								<form>
									<ul>
										<li>
											<div class="chbox">
												<input id="chp61" class="styled" type="checkbox" checked="">
												<label for="chp61"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">5.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp62" class="styled" type="checkbox">
												<label for="chp62"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">4.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp63" class="styled" type="checkbox">
												<label for="chp63"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">3.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp64" class="styled" type="checkbox">
												<label for="chp64"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">2.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="chbox">
												<input id="chp65" class="styled" type="checkbox">
												<label for="chp65"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">1.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
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
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="images/hotels/l9.jpg" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="{{route('front.hotel-detail')}}" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
												
							</div>
						</div>
					</div>
					<!--END RIGHT LISTINGS-->
				</div>
			</div>
		</div>
	</section>
@endsection
