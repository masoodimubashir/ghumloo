<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center " type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                @if(session('admin'))
                    <h1 class="welcome-text">Welcome,
                        <span class="text-black fw-bold">{{\Illuminate\Support\Str::ucfirst(session('admin')->name)}}</span>
                    </h1>

                @else
                    <h1 class="welcome-text">Welcome,
                        <span class="text-black fw-bold">{{\Illuminate\Support\Str::ucfirst(session('vendor')->name)}}</span>
                    </h1>

                @endif
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                     <span class="input-group-addon input-group-prepend border-right">
                         <span class="icon-calendar input-group-text calendar-icon"></span>
                     </span>
                    <input type="text" class="form-control">
                </div>
            </li>
            <li class="nav-item">
                <form class="search-form" action="#">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="icon-bell"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                     aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3 border-bottom">
                        <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-alert m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                            <p class="fw-light small-text mb-0"> Just now </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-settings m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                            <p class="fw-light small-text mb-0"> Private message </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-airballoon m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                            <p class="fw-light small-text mb-0"> 2 days ago </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class="icon-mail icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                     aria-labelledby="countDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(session('admin') || session('vendor'))
                        <img class="img-xs rounded-circle"
                             src="{{asset("default-profile-image/profile-image.png")}}" alt="Profile image">

                    @elseif(session('admin'))
                        <img class="img-xs rounded-circle" src="{{asset("storage/" . session('admin')->image)}}"
                             alt="Profile image">
                    @else
                        <img class="img-xs rounded-circle" src="{{asset("storage/" . session('vendor')->image)}}"
                             alt="Profile image">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        @if(session('admin') || session('vendor'))
                            <img class="img-sm rounded-circle "
                                 src="{{asset("default-profile-image/profile-image.png")}}"
                                 alt="Profile image">
                        @elseif(session('admin'))
                            <img class="img-sm rounded-circle"
                                 src="{{asset("storage/", session('admin')->image)}}"
                                 alt="Profile image">
                        @else
                            <img class="img-sm rounded-circle"
                                 src="{{asset("storage/", session('vendor')->image)}}"
                                 alt="Profile image">
                        @endif

                       @if(session('admin'))
                                <p class="mb-1 mt-3 font-weight-semibold">{{session('admin')->name}}</p>
                                <p class="fw-light text-muted mb-0">{{session('admin')->email}}</p>
                       @else
                                <p class="mb-1 mt-3 font-weight-semibold">{{session('vendor')->name}}</p>
                                <p class="fw-light text-muted mb-0">{{session('vendor')->email}}</p>
                       @endif
                    </div>
                    <a href="{{route('setting.index')}}" class="dropdown-item">
                        <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>
                        My Profile
                        <span class="badge badge-pill badge-danger">1</span>
                    </a>
                    <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                        Messages</a>
                    <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                        Activity</a>
                    <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                        FAQ</a>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item">
                        <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
                        Out
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
