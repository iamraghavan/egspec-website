@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Message from the Founder and Chairman' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-5">
                    <p class="text-primary animated fadeIn">Dr. Chev. G.S. Pillay <span class="text-success"> (Founder) </span> </p>

                    <p class="text-primary animated fadeIn">Smt. S. Jothimani G.S.Pillay <span class="text-success"> (Chairman) </span> </p>
                </div>

                {{-- <div class="col-lg-4 col-md-5">

                </div> --}}


                <div class="col-lg-8 col-md-7">
                    <p class="rts-section-description">
                        Students today are competing in a rapidly changing world. Simply covering the curriculum alone is not enough. At EGSPEC, we equip our students with both a first-rate education and the necessary skill sets to ensure that they stand out in today’s world”.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-md-center justify-content-start">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="rts-about-section">
                    {{-- <img src="{{asset('/assets/images/engineering_college.webp')}}" alt="About us - EGSPEC"> --}}
                </div>
            </div>

        </div>
    </div>
</section>


@include('components.cta')
@endsection

