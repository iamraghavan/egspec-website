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

    @if(session('error'))
    <script>
        // Display the error message using Swal alert
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: '{{ session('error') }} <a href="{{ session('link') }}">Click here</a> to go back.',
        });
    </script>
@endif
    @if(session('success'))
<div class="position-fixed top-0 start-0 m-3" style="z-index: 9999;">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}

    </div>
</div>
@endif

@if(session('error'))
<div class="position-fixed top-0 start-0 m-3" style="z-index: 9999;">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}

    </div>
</div>
@endif

<script>
    // Auto-close the alert after 5 seconds
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);
</script>



    @include('components.footer')


    {{-- Script Files --}}



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/gh/iamraghavan/egsp-hrms@main/public/assets/js/sweet-alert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/iamraghavan/egsp-hrms@main/public/assets/css/vendors/sweetalert2.css">




<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
