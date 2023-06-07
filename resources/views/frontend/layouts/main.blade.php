<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ env('APP_NAME') }}</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/frontend/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png"
        href="{{ asset('assets/frontend/images/favicon/favicon-32x32.png" sizes="32x32') }}">
    <link rel="icon" type="image/png"
        href="{{ asset('assets/frontend/images/favicon/favicon-16x16.png" sizes="16x16') }}">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/validation.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>

    <!---
<script src="js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/mapapi.js"></script>
--->
    <script src="{{ asset('assets/frontend/js/map-helper.js') }}"></script>

    <script src="{{ asset('assets/frontend/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/html5lightbox/html5lightbox.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/js/main-slider-script.js') }}"></script>

    <!-- thm custom script -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>



</body>


<!-- index-2 06:43:55 GMT -->

</html>
