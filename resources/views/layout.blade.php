<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/ico" href="{{ asset('images/icono.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('meta-title', '| SEDES')
    </title>
    @yield('metas')
    <meta name="description" content="@yield('meta-description')">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
    <!-- Range Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Rav Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/navigation.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.min.css') }}">
    <!-- Photoswipe Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-skin/default-skin.css') }}">

    <!-- ENDCSS FILES -->
    <!-- Icon Style -->
    <link href="{{ asset('assets/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

{{--    @stack('styles')--}}

</head>

<body>
    @include('partials.header')

    @yield('banner')
    @yield('mision')
    @yield('noticias')
    @yield('unidades')
    @yield('galeria')

    @yield('content')
    @yield('noticia')

    @include('partials.footer')


    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 copyright">
                    <p>Copyright © 2020 <a rel="nofollow" href="http://sedespotosi.com.bo/">Sedes Potosí</a></p>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/scroll.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe-ui-default.min.js') }}"></script>
</body>

</html>