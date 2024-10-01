<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
              {
                "@type": "Article",
                "headline": "E.G.S. Pillay Engineering College",
                "author": {
                  "@type": "Person",
                  "name": "Raghavan Jeeva"
                },
                "datePublished": "2023-09-29",
                "image": "https://egspec.blob.core.windows.net/egspec-assets/og_image.webp",
                "publisher": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "logo": {
                    "@type": "ImageObject",
                    "url": "https://egspec.org/assets/images/logo_tran.svg"
                  }
                }
              },
              {
                "@type": "BreadcrumbList",
                "itemListElement": [
                  {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://egspec.org/"
                  },
                  {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Principal Message",
                    "item": "https://egspec.org/about/message-from-the-principal"
                  },
                  {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Undergraduate",
                    "item": "https://egspec.org/academics/departments/bachelors"
                  },
                  {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Postgraduate",
                    "item": "https://egspec.org/academics/departments/masters"
                  },
                  {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "Master of Computer Applications",
                    "item": "https://egspec.org/academics/departments/postgraduate/master-of-computer-applications"
                  },
                  {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "Master of Business Administration",
                    "item": "https://egspec.org/academics/departments/postgraduate/master-of-business-administration"
                  },
                  {
                    "@type": "ListItem",
                    "position": 7,
                    "name": "Training and Placement",
                    "item": "https://egspec.org/placements"
                  }
                ]
              },
              {
                "@type": "LocalBusiness",
                "name": "E.G.S. Pillay Engineering College",
                "address": {
                  "@type": "PostalAddress",
                  "streetAddress": "Old Nagore Road, Thethi Village Nagapattinam",
                  "addressLocality": "Nagapattinam",
                  "postalCode": "611002",
                  "addressCountry": "India"
                },
                "telephone": "+91-436-525-1112",
                "url": "https://egspec.org",
                "logo": "https://egspec.org/assets/images/logo_tran.svg",
                "image": "https://egspec.blob.core.windows.net/egspec-assets/og_image.webp",
                "openingHours": "Mo-Fr 09:00-17:00"
              },
              {
                "@type": "Organization",
                "name": "E.G.S. Pillay Group of Institutions",
                "url": "https://egspec.org",
                "logo": "https://egspec.org/assets/images/logo_tran.svg",
                "sameAs": [
                  "https://www.facebook.com/EGSPGOI",
                  "https://twitter.com/raghavanjeeva",
                  "https://www.instagram.com/egspillay_group_of_institution"
                ]
              },
              {
                "@type": "Review",
                "itemReviewed": {
                  "@type": "EducationalOrganization",
                  "name": "E.G.S. Pillay Engineering College"
                },
                "author": {
                  "@type": "Person",
                  "name": "Raghavan Jeeva"
                },
                "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "4.5",
                  "bestRating": "5"
                },
                "datePublished": "2023-09-29"
              }
            ]
          }

    </script>

    <script type="application/ld+json">

        {
            "@context": "https://schema.org",
            "@graph": [
              {
                "@type": "Course",
                "name": "Mechanical Engineering",
                "description": "B.E. program focusing on the principles of mechanics, dynamics, and thermodynamics.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/mechanical-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Civil Engineering",
                "description": "B.E. program specializing in the design, construction, and maintenance of infrastructure.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/civil-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Electrical and Electronics Engineering",
                "description": "B.E. program that covers electrical systems, electronics, and related technologies.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/electrical-and-electronics-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Electronics and Communication Engineering",
                "description": "B.E. program focusing on electronic systems and communication technologies.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/electronics-and-communication-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Computer Science and Engineering",
                "description": "B.E. program covering fundamental concepts in computer science and software development.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/computer-science-and-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Information Technology",
                "description": "B.E. program that focuses on computer systems, networking, and information management.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/information-technology"
                }
              },
              {
                "@type": "Course",
                "name": "Biomedical Engineering",
                "description": "B.E. program combining engineering principles with medical and biological sciences.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/biomedical-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Computer Science & Business Systems Engineering",
                "description": "B.E. program integrating computer science with business management concepts.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/computer-science-business-systems-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Artificial Intelligence and Data Science",
                "description": "B.E. program focused on AI technologies and data analysis techniques.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/artificial-intelligence-data-science"
                }
              },
              {
                "@type": "Course",
                "name": "Master of Computer Applications (MCA)",
                "description": "Postgraduate program focusing on computer applications and software development.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/master-of-computer-applications"
                }
              },
              {
                "@type": "Course",
                "name": "Master of Business Administration (MBA)",
                "description": "Postgraduate program aimed at developing managerial skills and business acumen.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/master-of-business-administration"
                }
              },
              {
                "@type": "Course",
                "name": "Science and Humanity",
                "description": "Program exploring the interconnections between scientific inquiry and human values.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/undergraduate/science-and-humanity"
                }
              },
              {
                "@type": "Course",
                "name": "Manufacturing Engineering",
                "description": "M.E. program focusing on manufacturing processes and systems.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/manufacturing-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Computer Science and Engineering (M.E./M.Tech)",
                "description": "Postgraduate program in advanced computer science concepts and applications.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/computer-science-and-engineering"
                }
              },
              {
                "@type": "Course",
                "name": "Power Electronics and Drives",
                "description": "M.E. program focusing on power electronics systems and motor drives.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/power-electronics-and-drives"
                }
              },
              {
                "@type": "Course",
                "name": "Communication Systems",
                "description": "M.E. program specializing in advanced communication technologies.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/communication-systems"
                }
              },
              {
                "@type": "Course",
                "name": "Environmental Engineering",
                "description": "M.E. program focusing on sustainable environmental solutions.",
                "provider": {
                  "@type": "Organization",
                  "name": "E.G.S. Pillay Engineering College",
                  "sameAs": "https://egspec.org/academics/departments/postgraduate/environmental-engineering"
                }
              }
            ]
          }

    </script>



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
    @turnstileScripts()

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
