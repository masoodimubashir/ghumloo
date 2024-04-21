<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>


</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-7 mx-auto">
                    <div class=" grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-center mt-4">Sign In As Vendor</h2>

                                <form action="{{ route('vendor.register-vendor') }}" class="forms-sample" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Name" name="name" value="{{old('name')}}">
                                            @error('name')
                                            <small class="mt-2 text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Email" name="email" value="{{old('email')}}">
                                            @error('email')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" class="form-control" id="company_name"
                                                   placeholder="Company Name" name="company_name" value="{{old('company_name')}}">
                                            @error('company_name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="gst_number">GST Number</label>
                                            <input type="number" class="form-control" id="gst_number"
                                                   placeholder="GST Number" name="gst_number" value="{{old('gst_number')}}">
                                            @error('gst_number')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="hotel_name">Hotel Name</label>
                                            <input type="text" class="form-control" id="hotel_name"
                                                   placeholder="Hotel Name" name="hotel_name" value="{{old('hotel_name')}}">
                                            @error('hotel_name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="manager_name">Manager Name</label>
                                            <input type="text" class="form-control" id="manager_name"
                                                   placeholder="Manager Name" name="manager_name" value="{{old('manager_name')}}">
                                            @error('manager_name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="contact_person_name">Contact Person Name</label>
                                            <input type="text" class="form-control" id="contact_person_name"
                                                   placeholder="Contact Person Name"
                                                   name="contact_person_name"
                                                   value="{{old('contact_person_name')}}">
                                            @error('contact_person_name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_person_number">Contact Person Number</label>
                                            <input type="text" class="form-control" id="contact_person_number"
                                                   placeholder="Contact Person Number"
                                                   name="contact_person_number"
                                                   value="{{old('contact_person_number')}}">
                                            @error('contact_person_number')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                   placeholder="Address" name="address" value="{{old('address')}}">
                                            @error('address')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <br>
                                    <a class="mt-2 nav-link text-primary" href="{{route('vendor.view-login')}}">Already Have An Account?</a>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/jquery.cookie.js" type="text/javascript')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/proBanner.js')}}"></script>
    <!-- <script src="../../assets/js/Chart.roundedBarCharts.js')}}"></script> -->
    <!-- End custom js for this page-->
</body>


</html>


{{--<form action="">--}}
{{--    @csrf--}}
{{--    <img class="formlogo" src="{{asset('images/Logo/logo.png')}}" alt=""/>--}}

{{--    <div class="row">--}}
{{--        <div class="text-center row">--}}
{{--            <h4>Vendor Login</h4>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12">--}}
{{--            <input id="email" name="email" value="{{old('email')}}" type="text" class="validate">--}}
{{--            <label for="email">Email</label>--}}

{{--            @error('email')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="name"--}}
{{--                name="name"--}}
{{--                type="text" value="{{old('name')}}"--}}
{{--                class="validate">--}}
{{--            <label for="name">Name:</label>--}}
{{--            @error('name')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="company_name"--}}
{{--                name="company_name"--}}
{{--                type="text" value="{{old('company_name')}}"--}}
{{--                class="validate">--}}
{{--            <label for="company_name">Company Name:</label>--}}
{{--            @error('company_name')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="gst_number"--}}
{{--                name="gst_number"--}}
{{--                type="text" value="{{old('gst_number')}}"--}}
{{--                class="validate">--}}
{{--            <label for="gst_number">Gst Number:</label>--}}
{{--            @error('gst_number')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="hotel_name"--}}
{{--                name="hotel_name"--}}
{{--                type="text" value="{{old('hotel_name')}}"--}}
{{--                class="validate">--}}
{{--            <label for="hotel_name">Hotel Name</label>--}}
{{--            @error('hotel_name')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="manager_name"--}}
{{--                name="manager_name"--}}
{{--                type="text" value="{{old('manager_name')}}"--}}
{{--                class="validate">--}}
{{--            <label for="manager_name">Manager Name:</label>--}}
{{--            @error('manager_name')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="contact_person_name"--}}
{{--                name="contact_person_name"--}}
{{--                type="text" value="{{old('contact_person_name')}}"--}}
{{--                class="validate">--}}
{{--            <label for="contact_person_name">Contact Person Name:</label>--}}
{{--            @error('contact_person_name')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="contact_person_number"--}}
{{--                name="contact_person_number"--}}
{{--                type="text" value="{{old('contact_person_number')}}"--}}
{{--                class="validate">--}}
{{--            <label for="contact_person_number">Contact Person Number:</label>--}}
{{--            @error('contact_person_number')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <input--}}
{{--                id="address"--}}
{{--                name="address"--}}
{{--                type="text"--}}
{{--                value="{{old('address')}}"--}}
{{--                class="validate">--}}
{{--            <label for="address">Address</label>--}}
{{--            @error('address')--}}
{{--            <small class="text-danger">--}}
{{--                {{ $message }}--}}
{{--            </small>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="row">--}}
{{--        <div class="input-field col s12">--}}
{{--            <button type="submit" style="width: 100%;"--}}
{{--                    class="waves-effect waves-light btn-large btn-log-in">--}}
{{--                Login--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <a href="forgot.html" class="for-pass">Forgot Password?</a>--}}

{{--    <a href="{{route('vendor.view-login')}}" class="for-pass">Already Have An Account?</a>--}}

{{--</form>--}}
