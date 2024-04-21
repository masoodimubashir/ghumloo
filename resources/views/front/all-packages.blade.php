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
	<section class="hot-page2-alp hot-page2-pa-sp-top">
		<div class="container">
			<div class="row inner_banner bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Travel Packages</h1>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. </p>
					<ul>
						<li><a href="#inner-page-title">Home</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">All Packages</a> </li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						<!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
							<h3>Suggesting Packages</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="tour-details.html">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/places/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Bali, Indonesia</h5> <span>Bali is a living postcard</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5D/4N</span> </div>
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
							<h4><i class="fa fa-heart-o" aria-hidden="true"></i> Travel Amenities</h4>
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
						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-heart-o" aria-hidden="true"></i> Send your enquiry</h4>
							<div class="hot-room-ava-check form-out-box">
								<form class="contact__form v2-search-form package-form" method="post" action="https://rn53themes.net/themes/demo/travelz/mail/enquiry.php">
									<div class="alert alert-success contact__msg" role="alert">
										Thank you message
									</div>
								<div>
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" class="form-control" placeholder="Enter name*" name="name" required>
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" class="form-control" placeholder="Enter email*" name="email" required>
									</div>
									<div class="form-group">
										<label for="phone">Phone:</label>
										<input type="number" class="form-control" placeholder="Enter phone*" name="phone" required>
									</div>
									<div>
										<button type="submit" class="btn btn-primary" id="send_button">Submit</button>
									</div>
								</div>
							</form>
								</div>
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
										<a href="tour-details.html">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="images/places/23.jpg" alt=""> </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="trav-list-bod">
										<a href="tour-details.html"><h3>Swiss, Paris & Italy</h3></a>
										<p>Home to numerous lakes, villages and high peaks of the Alps, Switzerland is a dreamy mountainous Central European country that lures tourists from all over the world.</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="{{route('front.package-detail')}}" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
									<div>
										<div class="trav-ami">
											<h4>Detail and Includes</h4>
											<ul>
												<li><img src="images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
												<li><img src="images/icon/a15.png" alt=""> <span>Hotel</span></li>
												<li><img src="images/icon/a16.png" alt=""> <span>Transfer</span></li>
												<li><img src="images/icon/a17.png" alt=""> <span>Luggage</span></li>
												<li><img src="images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
												<li><img src="images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
												<li><img src="images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
											</ul>
										</div>	
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