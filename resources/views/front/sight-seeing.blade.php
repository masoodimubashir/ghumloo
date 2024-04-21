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
                                            <label>Age</label>
                                            <input type="text" class="form-control datepicker" name="from" placeholder="Check in">
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Age</label>
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
		
	<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_1">
			<div class="container">
				<div class="spe-title tit-inn-pg">
					<h1>Popular <span>Destinations</span> </h1>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
					<ul>
						<li><a href="main.html">Home</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#" class="bread-acti">Popular Package</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== PLACES ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg">
				<!-- TITLE & DESCRIPTION -->
				<!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <ul>
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
                                <a href="tour-details.html" class="fclick"></a>
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
                                <a href="tour-details.html" class="fclick"></a>
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
                                <a href="tour-details.html" class="fclick"></a>
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
                                <a href="tour-details.html" class="fclick"></a>
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
                                <a href="tour-details.html" class="fclick"></a>
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
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/1.jpg" alt="" loading="lazy">
                                    <h4>Maldives</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/2.jpg" alt="" loading="lazy">
                                    <h4>Seychelles</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Modern architecture</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/3.jpg" alt="" loading="lazy">
                                    <h4>Melbourne</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Modern architecture</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/7.jpg" alt="" loading="lazy">
                                    <h4>Cook Islands</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/8.jpg" alt="" loading="lazy">
                                    <h4>British Virgin Islands</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Modern architecture</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
						<li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="images/places/12.jpg" alt="" loading="lazy">
                                    <h4>Pattaya City</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach & Party City</span>
                                    <span>More details</span>
                                </div>
                                <a href="tour-details.html" class="fclick"></a>
                            </div>
                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</section>
@endsection