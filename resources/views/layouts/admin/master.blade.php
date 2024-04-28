<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('APP_NAME')}}</title>
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

    {{--    Custom Css --}}
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    {{--    Font Awesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
</head>

<body class="with-welcome-text">
<div class="container-scroller">
    {{--    Top Banner--}}
    {{--    <div class="row p-0 m-0 proBanner" id="proBanner">--}}
    {{--        <div class="col-md-12 p-0 m-0">--}}
    {{--            <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">--}}
    {{--                <div class="ps-lg-3">--}}
    {{--                    <div class="d-flex align-items-center justify-content-between">--}}
    {{--                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and--}}
    {{--                            more with--}}
    {{--                            this template!</p>--}}
    {{--                        <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank"--}}
    {{--                           class="btn me-2 buy-now-btn border-0">Buy Now</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="d-flex align-items-center justify-content-between">--}}
    {{--                    <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i--}}
    {{--                            class="ti-home me-3 text-white"></i></a>--}}
    {{--                    <button id="bannerClose" class="btn border-0 p-0">--}}
    {{--                        <i class="ti-close text-white"></i>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- partial:partials/_navbar.html -->

    @include('admin.component.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span
                                    class="online"></span>
                            </div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span
                                    class="offline"></span>
                            </div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span
                                    class="online"></span>
                            </div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span
                                    class="offline"></span>
                            </div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span
                                    class="online"></span>
                            </div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span
                                    class="online"></span>
                            </div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        @if(session('admin'))
            @include('admin.sidebar')
        @else
            @include('Vendor.sidebar')
        @endif
        <div class="main-panel">
            <div class="content-wrapper">

                @yield('body')

            </div>
            @include('admin.footer')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->


    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .successModal {
            display: none;
            min-width: 250px;
            margin-left: -125px;
            background-color: white;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 2px green;
            position: fixed;
            padding: 10px;
            z-index: 999999;
            left: 50%;
            bottom: 30px;
        }

        .errorModel {
            display: none;
            min-width: 250px;
            margin-left: -125px;
            background-color: white;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 2px red;
            position: fixed;
            padding: 10px;
            z-index: 999999;
            left: 50%;
            bottom: 30px;
        }

        .successModal .text {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .errorModel .text {
            display: flex;
            align-items: center;
            gap: 10px;
        }

    </style>

    <!-- Check if there are any errors -->
    @if ($errors->any())
        <!-- Display the modal -->
        <div class="errorModel" style="display: block;">
            <div class="text">
                <i class="fa fa-check"></i>
                <small>

                    {{ $errors->first('error') }}

                </small>
            </div>
        </div>
    @endif

    <!-- Check if there are any success messages -->
    @if (session('success'))
        <!-- Display the success modal -->
        <div class="successModal" style="display: block;">
            <div class="text">
                <i class="fa fa-check"></i>
                <small>
                    {{ session('success') }}
                </small>
            </div>
        </div>
    @endif

    <!-- Your other HTML content -->


</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->

{{--<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>--}}
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
{{--<script src="{{asset('js/jquery.cookie.js" type="text/javascript')}}"></script>--}}
{{--<script src="{{asset('js/dashboard.js')}}"></script>--}}
{{--<script src="{{asset('js/proBanner.js')}}"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{config('services.GOOGLE_API_KEY')}}&libraries=places&v=weekly&callback=initMap">
</script>
<!-- <script src="../../assets/js/Chart.roundedBarCharts.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

<script src="{{asset('css/custom.js')}}"></script>




<script>
    new TomSelect("#room_id", {
        plugins: ['remove_button'],
        create: true,
        onItemAdd: function () {
            this.setTextboxValue('');
            this.refreshOptions();
        },
        render: {
            option: function (data, escape) {
                return '<div class="d-flex gap-3 w-100">' +
                    '<span>' + escape(data.value) + '</span><span class="ms-auto">' + escape(data.date) + '</span></div>';
            },
            item: function (data, escape) {
                return '<div>' + escape(data.value) + '</div>';
            }
        }
    });
    //
    // new TomSelect("#city_id", {
    //     plugins: ['remove_button'],
    //     create: true,
    //     onItemAdd: function () {
    //         this.setTextboxValue('');
    //         this.refreshOptions();
    //     },
    //     render: {
    //         option: function (data, escape) {
    //             return '<div class="d-flex">' +
    //                 '<span>' + escape(data.value) + '</span><span class="ms-auto text-muted">' + escape(data.date) + '</span></div>';
    //         },
    //         item: function (data, escape) {
    //             return '<div>' + escape(data.value) + '</div>';
    //         }
    //     }
    // });



</script>

<script>

    // Show the success modal
    document.addEventListener('DOMContentLoaded', function () {
        let successModal = document.querySelector('.successModal');
        if (successModal) {
            successModal.style.display = 'block';
            // Hide the success modal after 3 seconds (adjust the time as needed)
            setTimeout(function () {
                successModal.style.display = 'none';
            }, 3000);
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        let successModal = document.querySelector('.errorModel');
        if (successModal) {
            successModal.style.display = 'block';
            // Hide the success modal after 3 seconds (adjust the time as needed)
            setTimeout(function () {
                successModal.style.display = 'none';
            }, 3000);
        }
    });
</script>


</body>

</html>
