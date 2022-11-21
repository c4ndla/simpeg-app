<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                    <!-- dark Logo text -->
                    <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="{{ asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item">
                    <form class="app-search d-none d-md-block d-lg-block">
                        <input type="text" class="form-control" placeholder="Search & enter">
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- User Profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown u-pro">
                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class=""> <span class="hidden-md-down"
                        style="color:white">{{
                        Auth::user()->name}}
                        &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                <div class="dropdown-menu dropdown-menu-end animated flipInY">
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                        Setting</a>
                    <!-- text-->
                    <hr>
                    <!-- text-->
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="ti-power-off"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End User Profile -->

        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->