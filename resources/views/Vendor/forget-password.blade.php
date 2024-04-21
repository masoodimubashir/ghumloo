<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/materialize.css') }}">

    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="blog-login">
    <div class="blog-login-in">
        <form action="{{ route('admin.store') }}">
            @csrf
            <img class="formlogo" src="{{asset('images/Logo/logo.png')}}" alt=""/>
            <div class="row">
                <div class="text-center row">
                    <h4>Reset Password</h4>
                </div>
                <div class="input-field col s12">
                    <input
                        id="email"
                        name="email"
                        value="{{old('email')}}"
                        type="text"
                        class="validate">
                    <label for="email">Email</label>

                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" style="width: 100%;"
                            class="waves-effect waves-light btn-large btn-log-in">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--======== SCRIPT FILES =========-->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/materialize.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2024 16:51:13 GMT -->

</html>

