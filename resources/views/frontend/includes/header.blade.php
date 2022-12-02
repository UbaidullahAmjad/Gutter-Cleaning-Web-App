
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
<header class="site-header header-style-3 mo-left light">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul class="social-line text-center pull-right">
                        <li><a href="tel:447784206"><i class="fa fa-phone "></i> <span>+447784206</span> </a></li>
                        <li><a href="mailto:info@guttercleaningguys.com"><i class="fa fa-envelope-o "></i> <span>info@guttercleaningguys.com</span></a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="social-line text-center pull-right">

                        <li><a href="https://www.facebook.com/guttercleaninguy/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/theguttercleaningguys/"><i class="fa fa-instagram "></i></a></li>
                        <!--<li> <a id="quik-search-btn"><i class="fa fa-search "></i></a> </li>-->
                        @auth
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <input type="submit" class="btn btn-light" value="Logout">
                            </form>
                        @else
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header main-bar-wraper header-curve navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="slide-up">
                <div class="container clearfix bg-primary">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="{{ route('welcome') }}"><img src="{{ asset('images/logo3.png') }}" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav header3-btn disnone-md">
                        <div class="extra-cell">
                            @auth
                                <a href="{{url('dashboard')}}" class="site-button white skew-secondry">Dashboard</a>
                            @else
                                <a href="{{url('services')}}" class="site-button white skew-secondry">Book Now</a>
                            @endauth
                        </div>
                    </div>
                    <!-- extra nav -->
                    <div class="extra-nav"> </div>
                    <!-- Quik search -->
                    <div class="quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class=" nav navbar-nav">
                            <li class="{{Request::is('/')? 'active':''}}"> <a href="{{ route('welcome') }}">Home<i class="fa fa-chevron-down"></i></a>

                            </li>
                            <!--<li class="{{Request::is('gutter-cleaning')? 'active':''}}{{Request::is('solar-cleaning')? 'active':''}}"> <a href="#">About<i class="fa fa-chevron-down"></i></a>-->
                            <!--    <ul class="sub-menu">-->
                                    

                            <!--    </ul>-->
                            <!--</li>-->

                            <li class="{{Request::is('packages')? 'active':''}}"> <a href="{{ route('packages') }}">Specials<i class="fa fa-chevron-down"></i></a>

                            </li>

                            <li class="{{Request::is('services')? 'active':''}}"> <a href="{{ route('services') }}">Prices<i class="fa fa-chevron-down"></i></a>

                            </li>
                            
                            <li><a href="{{ route('gutter_cleaning') }}">Gutter Cleaning</a> </li>
                            <li><a href="{{ route('solar_cleaning') }}">Solar Cleaning</a></li>

                            <li class="{{Request::is('contact-us')? 'active':''}}"> <a href="{{ route('contact_us') }}">Contact<i class="fa fa-chevron-down"></i></a>

                            </li>



                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
