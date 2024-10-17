@extends('layouts.app')
@section('content')

{{-- {{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }} --}}
<!-- Include HystModal CSS -->
<link href="
https://cdn.jsdelivr.net/npm/hystmodal@1.0.1/dist/hystmodal.min.css
" rel="stylesheet">
<style>
    /* Custom styles for the HystModal */
    .hystmodal__wrap {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        height: 100%;
    }

    .hystmodal__window {
        padding: 2px;
    border-radius: 10px;
    margin-top: 15rem;
    width: 90%;
    max-width: 600px;
    position: relative;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    .hystmodal__close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 16px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        #advertisement-modal {
            display: none; /* Hide modal on mobile */
        }
    }
</style>

<!-- Modal Structure -->
<div class="hystmodal" id="advertisement-modal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose="" class="hystmodal__close">Close</button>
            <img src="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" alt="Advertisement" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
    </div>
</div>

<!-- Include HystModal JS -->
<script src="
https://cdn.jsdelivr.net/npm/hystmodal@1.0.1/dist/hystmodal.min.js
"></script>

<script>
    // Initialize HystModal
    document.addEventListener('DOMContentLoaded', function () {
        var modal = new HystModal({
            linkAttributeName: "data-hystmodal",
            closeOnEsc: true,
            closeOnOverlayClick: true,
        });

        // Open the modal automatically on page load only for desktop devices
        if (window.innerWidth >= 768) {
            modal.open('#advertisement-modal');
        }
    });
</script>


<style>



    .rts-about-content .about-positioned-text h2 {
        color: var(--rt-theme) !important;
    }
    .single-service > .content > p {
        font-size: 2.7rem !important;

    }

    .single-service > .content > div > p {
        font-size: 2.7rem !important;

    }
</style>

@include('components.home-slider')
<x-scrolling-marquee :messages="$messages" />

<x-home-page-counter/>



@include('components.logo-slider')



{{-- <x-confetti /> --}}

<section class="rts-about v__1 rt-relative rts-section-padding">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-5 col-xl-5 col-md-10">
                <div class="rts-about-image">
                    <img src="@blob('engineering_college.webp')" alt="EGS Pillay Engineering College">
                </div>
            </div>
            <div class="col-lg-7 col-xl-7 col-md-10">
                <div class="rts-about-content">
                    <div class="rts-about-flex mb--10">
                        <h2 class="section-title w-320">
                            About <span style="color: var(--rt-primary);">EGSP</span><span style="color: var(--rt-theme);">EC</span><span class="rts-line"></span>

                        </h2>

                    </div>
                    <p class="rts-paragraph mb--50">
                        Established in 1995, <span style="color: var(--rt-primary);"> E. G. S. Pillay Engineering College </span> is a renowned institution in Tamil Nadu, known for its
                        exceptional infrastructure and academic excellence. Affiliated with Anna University since 2002, it empowers aspiring
                        engineers and managers through comprehensive programs and activities.
                    </p>
                    <a href="{{ url("/about/history") }}" class="about-btn rts-nbg-btn btn-arrow">EGSPEC Overview <span><i
                                class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    <div class="about-positioned-text ">
                        <h2 class="rt-clip-text">EST. 1995</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@php
    $cutouts = App\Models\NewspaperCutout::all(); // Fetch the cutouts from the database
@endphp
<x-newspaper-cutout :cutouts="$cutouts" />

@php
$events = [
    [
        'title' => 'EGSPEC ISSH-T',
        'date' => '05/10/2024',
        'time' => '09:00 AM',
        'place' => 'EGSPEC',
    ],


    [
        'title' => 'ISRO',
        'date' => '2024-10-04',
        'time' => '09:00 AM',
        'place' => 'EGSPEC',
    ],
    [
        'title' => 'Chairman Amma Birthday Metrit Scholarship',
        'date' => '2024-02-06',
       'time' => '09:00 AM',
        'place' => 'EGSPEC',
    ],
];


$notices = [
    'latest' => [
        [
            'date' => '2024-10-01',
            'content' => 'Circular: Important Updates on EGSPEC Admission Procedures for 2024.'
        ],
    ],
    'coe' => [
        [
            'date' => '2024-10-05',
            'content' => 'EGSPEC COE Notification'
        ],
    ],
    'admin' => [
        [
            'date' => '2024-10-10',
            'content' => 'EGSPEC Administration'
        ],
    ],
];


@endphp

<section class="rts-notice rts-section-padding rts-section-padding">
    <div class="container">
        <div class="row gy-5 gy-lg-0 justify-content-md-center">
            <div class="col-md-11 col-lg-7">
                <x-index-event-component :events="$events" />
            </div>
            <div class="col-md-11 col-lg-5">
                <x-index-circular-component :notices="$notices" />
            </div>
        </div>
    </div>
</section>



@include('components.testimonial')
@include('components.cta')


{{-- @include('components.admision-model') --}}



@endsection

