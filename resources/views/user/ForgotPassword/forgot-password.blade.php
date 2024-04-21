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
    </section>
    <!-- END TOP SEARCH BOX -->

    <!--END HEADER SECTION-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form">
                <h4>Forgot <span>Password</span></h4>
                <form class="col s12" action="{{route('forget.password.post')}}" method="POST">
                    @csrf
                    @if (session('success'))
                        <div class="text-success">
                            <small>
                                {{ session('success') }}
                            </small>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="text-danger">
                            <small>
                                {{ session('error') }}
                            </small>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email"
                                   value="{{old('Email')}}" placeholder="Email">
                            @error('email')
                                <strong class="text-danger">
                                    {{ $message }}
                                </strong>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn">
                        </div>
                    </div>
                </form>
                <h4>OR</h4>
                <p><a class="btn btn-lg btn-primary" href="{{route('user.view-login')}}">Back</a>
                </p>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection
