<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="Clean360° - Cleaning Servces Template"/>
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
{{--    <title>Services</title>--}}

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">

</head>
<body id="bg">
<div id="loading-area"></div><div class="page-wraper">
    <!-- header -->
    @include('frontend.includes.header')
    <!-- header END -->
    @yield('content')
    @include('frontend.includes.footer')
    <!-- JavaScript  files ========================================= -->
    <script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('plugins/switcher/js/switcher.js') }}"></script><!-- CONTACT JS  -->
    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
    <script  src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script  src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script  src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script   src="js/rev.slider.js"></script>
@stack('custom-scripts')
</body>
</html>
