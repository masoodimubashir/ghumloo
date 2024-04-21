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

    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form">
                <h4>Sign <span>In</span></h4>


                <form class="col s12" action="{{route('user.login')}}" method="POST">
                    @csrf

                    @if(session('success'))
                        <strong class="text-success">
                            {{session('success')}}
                        </strong>
                    @endif

                    @if(session('error'))
                        <strong class="text-danger">
                            {{session('error')}}
                        </strong>
                    @endif

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" placeholder="Email" name="email"
                                   value="{{old('email')}}">

                            @if ($errors->any())
                                <strong class="text-danger">

                                    {{ $errors->first('error') }}

                                </strong>
                            @endif

                            @error('email')
                            <strong class="text text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" class="validate" placeholder="Password" name="password"
                                   value="{{old('password')}}">

                            @error('password')

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
                <p>
                    <a href="{{route('forget.password.get')}}">forgot password</a> | Are you a new user ? <a
                        href="{{route('user.view-signup')}}">Register</a>
                </p>
                <div class="soc-login">
                    <h4>Sign in using</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook fb1"></i>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter tw1"></i>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="{{route('social.redirect', ['google'])}}">
                                <i class="fa fa-google-plus gp1"></i>
                                Google
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection
