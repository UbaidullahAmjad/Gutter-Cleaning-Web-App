<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Gutter Cleaning Guys</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
    
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('images/logo3.jpg') }}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/dashboard','dashboard')) active @endif"
                                href="{{ route('admin.dashboard') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/slot-management','admin/slot-days/*','admin/time-slots/*','admin/Block-list','admin/Block-list/*')) active @endif"
                                href="{{ route('admin.slot_management') }}">
                                <i class="ni ni-planet text-primary"></i>
                                <span class="nav-link-text">Slots Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/services','admin/services/*')) active @endif" href="{{ route('admin.services.index') }}">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Services Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/packages','admin/packages/*')) active @endif" href="{{ route('admin.packages.index') }}">
                                <i class="ni ni-planet text-success"></i>
                                <span class="nav-link-text">Packages Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/bookings','admin/bookings/*')) active @endif" href="{{ route('admin.bookings.index') }}">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Bookings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/guest-bookings')) active @endif" href="{{ route('admin.guest_bookings') }}">
                                <i class="ni ni-single-02 text-orange"></i>
                                <span class="nav-link-text">Guest Bookings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/bookings-history')) active @endif" href="{{ route('admin.bookings.history') }}">
                                <i class="ni ni-single-02 text-orange"></i>
                                <span class="nav-link-text">Bookings History</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/subscriptions','admin/subscriptions/*')) active @endif" href="{{ route('admin.subscriptions') }}">
                                <i class="ni ni-single-02 text-success"></i>
                                <span class="nav-link-text">Subscriptions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/appointments','admin/appointments/*')) active @endif" href="{{ route('admin.appointments') }}">
                                <i class="ni ni-single-02 text-success"></i>
                                <span class="nav-link-text">Appointments</span>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link @if(request()->is('admin/newsletters','admin/newsletters/*')) active @endif" href="{{ route('admin.newsletters') }}">--}}
{{--                                <i class="ni ni-single-02 text-success"></i>--}}
{{--                                <span class="nav-link-text">Newsletters</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/estimates','admin/estimates/*')) active @endif" href="{{ route('admin.estimates') }}">
                                <i class="ni ni-single-02 text-success"></i>
                                <span class="nav-link-text">Estimates</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/contacts','admin/contacts/*')) active @endif" href="{{ route('admin.contacts') }}">
                                <i class="ni ni-single-02 text-success"></i>
                                <span class="nav-link-text">Contacts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/users','admin/users/*')) active @endif" href="{{ route('admin.users.index') }}">
                                <i class="fa fa-users"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/settings')) active @endif" href="{{ route('admin.settings') }}">
                                <i class="fas fa-users-cog text-info"></i>
                                <span class="nav-link-text">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        @include('admin.includes.header')
        @yield('content')
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
    @stack('custom-scripts')
</body>

</html>
