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



<style>
    .text-justify{text-align:justify!important}.iap{max-width:100%!important;height:4rem;font-weight:200;margin:3rem}.iap-h3{text-align:center!important;font-size:18px!important;margin:20px 0!important;color:#333!important}html{scroll-behavior:smooth}
</style>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset("/assets/js/raghavan/modal.js")}}"></script>


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
    {{-- <script src="{{ asset("/assets/js/plugins/contact.form.js") }}"></script> --}}
    <script src="{{ asset("/assets/js/plugins/nice-select.min.js") }}"></script>
    <!-- main Js -->
    <script src="{{ asset("/assets/js/main.js") }}"></script>

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>

<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
<script src="{{ asset("/assets/js/fetfirebase.min.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<style>
    .skeleton {
        width: 100%;
        height: 0;
        padding-bottom: 75%; /* Aspect ratio */
        background: #e0e0e0;
        animation: skeleton-loading 1.2s infinite;
    }

    @keyframes skeleton-loading {
        0% {
            background-color: #e0e0e0;
        }
        50% {
            background-color: #f0f0f0;
        }
        100% {
            background-color: #e0e0e0;
        }
    }
</style>


</body>

</html>
