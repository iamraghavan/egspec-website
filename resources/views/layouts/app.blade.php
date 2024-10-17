<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicons/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('/favicons/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('/favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link rel="icon" type="image/x-icon" href="{{asset('favicons/favicon.ico')}}">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}


    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5ZJXXK5Y1F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5ZJXXK5Y1F');
</script>

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1062068312062798');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1062068312062798&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "ocpp8v8uho");
</script>


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


<!-- Critical CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/plugins/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

<!-- Non-Critical CSS -->
<link rel="preload" href="{{ asset('/assets/css/plugins/fontawesome.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('/assets/css/plugins/swiper.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('/assets/css/vendor/magnific-popup.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('/assets/css/vendor/metismenu.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('/assets/css/plugins/nice-select.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('/assets/css/plugins/jquery-ui.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload"  type="text/css" href="https://cdn.jsdelivr.net/gh/iamraghavan/egsp-hrms@main/public/assets/css/vendors/sweetalert2.css" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">
<link rel="preload"  href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">

<!-- Fallback for legacy browsers -->
<noscript>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet"  type="text/css" href="https://cdn.jsdelivr.net/gh/iamraghavan/egsp-hrms@main/public/assets/css/vendors/sweetalert2.css" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet';this.media='all'" media="print">

</noscript>

<style>
    .text-justify { text-align: justify !important; }
    .iap { max-width: 100% !important; height: 4rem; font-weight: 200; margin: 3rem; }
    .iap-h3 { text-align: center !important; font-size: 18px !important; margin: 20px 0 !important; color: #333 !important; }
    html { scroll-behavior: smooth; }
</style>
</head>

<body class="page">
@include('components.header')

@yield('content')

@include('components.mobile-nav')

<!-- Enhanced Error Handling -->
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        footer: '<a href="{{ session('link') }}">Click here</a> to go back.',
        showCloseButton: true,
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

<script>
    // Auto-close the alert after 5 seconds
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);
</script>

<x-campus-weather />
@include('components.footer')


<!-- Include jQuery -->


   {{-- Script Files --}}

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/gh/iamraghavan/egsp-hrms@main/public/assets/js/sweet-alert/sweetalert.min.js"></script>

@turnstileScripts()

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

<!-- Custom Modal JS -->
<script src="{{ asset('/assets/js/raghavan/modal.js') }}" defer></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>

<!-- Additional JS Files -->
<script src="{{ asset('/assets/js/vendor/jquery-ui.js') }}" defer></script>
<script src="{{ asset('/assets/js/vendor/waw.js') }}" defer></script>
<script src="{{ asset('/assets/js/vendor/metismenu.js') }}" defer></script>
<script src="{{ asset('/assets/js/vendor/magnifying-popup.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/swiper.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/counterup.js') }}" defer></script>
<script src="{{ asset('/assets/js/vendor/waypoint.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/isotop.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/imagesloaded.pkgd.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/resizer-sensor.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/sticky-sidebar.js') }}" defer></script>
<script src="{{ asset('/assets/js/vendor/chroma.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/twinmax.js') }}" defer></script>
<script src="{{ asset('/assets/js/plugins/nice-select.min.js') }}" defer></script>
<script src="{{ asset('/assets/js/main.js') }}" defer></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
    });
</script>

<!-- Firebase Scripts -->
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
<script src="{{ asset('/assets/js/fetfirebase.min.js') }}" defer></script>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>

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
