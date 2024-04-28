@extends('layouts.front.master')
@section('body')

    <button id="btn">btn</button>

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
                        <li><a href="{{route('front.home')}}">Home</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="{{route('front.packages')}}" class="bread-acti">All Packages</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">

                        <!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
                            <h3>Suggesting Packages</h3>
                        </div>

                        <!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
								<!--LISTINGS-->
                                @if($packages->isNotEmpty())
                                    @foreach($packages as $package)
                                        @php
                                            $images = explode(',', $package->images)
                                        @endphp
                                        <li>
                                            <a href="tour-details.html">
                                                <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"><img
                                                        src="{{asset('storage/' . $images[1])}}" alt=""></div>
                                                <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                    <h5>{{$package->package_name}}</h5>
                                                    <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"><span>{{$package->total_stay_period}} Days</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>


                        </div>

                        <!--PART 7 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Travel Available Check</h4>
							<div class="hot-room-ava-check">
                                <form id="package-form">
                                    @csrf


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

                                    <input type="reset" id="ClearForm" value="Clear Search" style=" border: 1px solid gray; padding: 7px; border-radius: 5px;">
                                </form>
							</div>
						</div>

						<!--PART 6 : LEFT LISTINGS-->


                    </div>
					<!--END LEFT LISTINGS-->

					<!--RIGHT LISTINGS-->
					<div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
							<!--LISTINGS-->
							<div class="row">
                                <div id="packageListContainer">
                                    @if($packages->isNotEmpty())
                                        @foreach($packages as $package)
                                            @php
                                                $images = explode(',', $package->images)
                                            @endphp
                                            <div class="hot-page2-alp-r-list">
                                                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                                    <a href="{{route('front.package-detail', [$package->id])}}">
                                                        {{--                                                    <div class="hotel-list-score">4.5</div>--}}
                                                        <div class="hot-page2-hli-1"><img
                                                                src="{{asset('storage/' . $images[0])}}" alt=""></div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="trav-list-bod">
                                                        <a href="{{route('front.package-detail', [$package->id])}}">
                                                            <h3>{{$package->package_name}}</h3></a>
                                                        <p>{{$package->short_description}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <div class="hot-page2-alp-r-hot-page-rat"><i
                                                                style="font-size: .8em"
                                                                class="fa-solid fa-indian-rupee-sign"></i> {{$package->discount_price}}
                                                        </div>
                                                        <span class="hot-list-p3-1">Price</span> <span
                                                            class="hot-list-p3-2"><i style="font-size: .8em"
                                                                                     class="fa-solid fa-indian-rupee-sign"></i> {{$package->package_price}}</span><span
                                                            class="hot-list-p3-4">
												<a href="{{route('front.package-detail', json_encode([$package->id]))}}"
                                                   class="hot-page2-alp-quot-btn">Book Now</a>

											</span> </div>
                                                </div>
                                                <div>

                                                    <div class="trav-ami">
                                                        <h4>Detail and Includes</h4>
                                                        <ul>

                                                            <li>
                                                            <span>
                                                                Hotel:
                                                                @if($package->hotels->isNotEmpty())
                                                                    @foreach($package->hotels as $hotel)
                                                                        {{$hotel->hotel_name}},
                                                                    @endforeach
                                                                @endif
                                                            </span>
                                                            </li>
                                                            <li>
                                                                <span>{{$package->total_stay_period}} Days</span></li>
                                                            <li>
                                                            <span>
                                                                Location :
                                                                @if($package->hotels->isNotEmpty())
                                                                    @foreach($package->hotels as $hotel)
                                                                        {{$hotel->city->city}},
                                                                    @endforeach
                                                                @endif
                                                            </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>

                        </div>
                        <div class="pagination mt-4">
                            <li class="page-item {{ $packages->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link"
                                   href="{{ $packages->previousPageUrl() }}">Previous</a>
                            </li>

                            <li class="page-item {{ $packages->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $packages->nextPageUrl() }}">Next</a>
                            </li>
                        </div>
					</div>
                    <!--END RIGHT LISTINGS-->
				</div>
			</div>
		</div>
    </section>

    <script>
        // Attach event listener to input fields
        $(document).ready(function () {
            $('#package-form select').on('change', function () {


                let formData = $('#package-form').serialize();

                $.ajax({
                    url: '{{ route('front.packages') }}',
                    type: 'GET',
                    data: formData,
                    success: function (response) {
                        $('#packageListContainer').empty();

                        if (response.length > 0) {
                            response.forEach(function (package) {
                                let packageHtml = `
                            <div class="hot-page2-alp-r-list">
                                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                    <a href="">
                                        <div class="hot-page2-hli-1">
                                            <img src="{{ asset('storage/') }}/${package.images[0]}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="trav-list-bod">
                                        <a href="">
                                            <h3>${package.package_name}</h3>
                                        </a>
                                        <p>${package.short_description}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                        <div class="hot-page2-alp-r-hot-page-rat">
                                            <i style="font-size: .8em" class="fa-solid fa-indian-rupee-sign"></i> ${package.discount_price}
                                        </div>
                                        <span class="hot-list-p3-1">Price</span>
                                        <span class="hot-list-p3-2">
                                            <i style="font-size: .8em" class="fa-solid fa-indian-rupee-sign"></i> ${package.package_price}
                                        </span>
                                        <span class="hot-list-p3-4">
                                            <a href="" class="hot-page2-alp-quot-btn">Book Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <div class="trav-ami">
                                        <h4>Detail and Includes</h4>
                                        <ul>
                                            <li>
                                                <span>
                                                    Hotel:
                                                    ${package.hotels.map(hotel => hotel.hotel_name).join(', ')}
                                                </span>
                                            </li>
                                            <li><span>${package.total_stay_period} Days</span></li>
                                            <li>
                                                <span>
                                                    Location :
                                                    ${package.hotels.map(hotel => hotel.city.city).join(', ')}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `;

                                $('#packageListContainer').append(packageHtml);
                            });
                        } else {
                            let html = `
                            <div class="hot-page2-alp-r-list" style="padding: 10px; border-radius: 10px">
                                <strong style="text-danger">Data Not Found</strong>
                            </div>
                        `;

                            $('#packageListContainer').append(html);
                        }
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        console.error('status', status);
                    }
                });
            });
        });
    </script>

@endsection
