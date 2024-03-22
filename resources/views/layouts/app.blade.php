<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Development</title>
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/animate.min.css") }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/fontawesome.min.css") }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/vendor/bootstrap.min.css") }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/swiper.min.css") }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset("/assets/css/vendor/magnific-popup.css") }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset("/assets/css/vendor/metismenu.css") }}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/jquery-ui.css") }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">

</head>

<body class="page">



    @include('components.header')

    @yield('content')



    @include('components.mobile-nav')

    @include('components.footer')


    {{-- Script Files --}}

    <!-- jquery js -->
    <script src="{{ asset("/assets/js/vendor/jquery.min.js") }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset("/assets/js/plugins/bootstrap.min.js") }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset("/assets/js/vendor/jquery-ui.js") }}"></script>
    <!-- wow js -->
    <script src="{{ asset("/assets/js/vendor/waw.js") }}"></script>
    <!-- mobile menu -->
    <script src="{{ asset("/assets/js/vendor/metismenu.js") }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset("/assets/js/vendor/magnifying-popup.js") }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset("/assets/js/plugins/swiper.js") }}"></script>
    <!-- counterup -->
    <script src="{{ asset("/assets/js/plugins/counterup.js") }}"></script>
    <script src="{{ asset("/assets/js/vendor/waypoint.js") }}"></script>
    <!-- isotop mesonary -->
    <script src="{{ asset("/assets/js/plugins/isotop.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/imagesloaded.pkgd.min.js") }}"></script>
    <!-- isotop mesonary end-->
    <script src="{{ asset("/assets/js/plugins/resizer-sensor.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/sticky-sidebar.js") }}"></script>
    <script src="{{ asset("/assets/js/vendor/chroma.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/twinmax.js") }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset("/assets/js/plugins/contact.form.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/nice-select.min.js") }}"></script>
    <!-- main Js -->
    <script src="{{ asset("/assets/js/main.js") }}"></script>


</body>

</html>
