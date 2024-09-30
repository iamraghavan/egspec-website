@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Message From the Principal' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                    <img src="@blob('')" alt="egspec secretary" class="img-fluid rounded-circle" style="max-width: 200px;">
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <h5 class="profile-name">Dr. S. Ramabalan, M.E., Ph.D</h5>
                            <p class="profile-role">Principal - E. G. S. Pillay Engineering College</p>
                            {{-- <p class="profile-location"></p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title animated fadeIn">Principal Message</h3>
                    <p class="desc mt-5 text-justify">
                        We at <span style="color: var(--rt-primary); font-weight:bold;"> E. G. S. Pillay Engineering College </span> have always worked toward furthering our philosophy of value-based education through our motto “Social Transformation through Dynamic Education. Ever since its establishment, the EGSPEC conglomerate of students, staff and faculty have endeavored towards creating young and dynamic engineers who will form the crux of the technical workforce of tomorrow. In our quest to provide the country with the best working talent, we have created a disciplined environment that at the same time provides each individual with the creative freedom to think out of the box. It has always been our belief that,every student has an unending pool of talent that needs to be nurtured and which when guided with proper care and the correct attitude can help bring out the best from any individual. I am convinced that every student passing out of our College will leave their undefiled mark of success in whichever sphere of life they choose to work and I hope that their hunger to do well for the benefit of the human race only increases with their success in life.
                    </p>

                </div>
            </div>
        </div>





    </div>
</section>


@include('components.cta')
@endsection

