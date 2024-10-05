@extends('layouts.app')
@section('content')

@include('components.home-slider')
<x-scrolling-marquee :messages="$messages" />
<div class="rts-service v_2">
    <div class="row">
        <div class="single-service-content">

            <div class="single-service">
                <div class="content">
                    <p class="service-title">Scopus Publications</p>
                    <h5 class="counter text-white" style="font-size: 36px; color: #ffffff;" data-count="13000">0</h5>
                </div>
            </div>

            <div class="single-service">
                <div class="content">
                    <p class="service-title">Web of Science Publications</p>
                    <h5 class="counter text-white" style="font-size: 36px; color: #ffffff;" data-count="6500">0</h5>
                </div>
            </div>

            <div class="single-service">
                <div class="content">
                    <p class="service-title">Patents Filed</p>
                    <h5 class="counter text-white" style="font-size: 36px; color: #ffffff;" data-count="850">0</h5>
                </div>
            </div>

            <div class="single-service">
                <div class="content">
                    <p class="service-title">Patents Published</p>
                    <h5 class="counter text-white" style="font-size: 36px; color: #ffffff;" data-count="525">0</h5>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    // Number counter animation
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;

                const increment = target / 200; // Adjust speed of counting
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    });
</script>

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

