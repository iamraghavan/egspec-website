@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Basketball Court'
])


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5 class="rts-section-title animated fadeIn">Mr. D. Velavan, <br>
                        Director / Physical Education</h5>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <p class="rts-section-description">
                        Sports is an essential and integral part of every human being Not only do the students excel in studies, their sporting achievements are also worthy. In, Cricket, Basketball, Badminton, Hockey, Tennis, Volleyball and other Sports. If sports & games are properly instituted in every organization, there will not be much physical suffering in this world keeping in mind; we encourage every student to take part in sports. We give special attention and training to students who want to build their career in any sports field.

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="academic-picture">
                    <img src="https://egspec.blob.core.windows.net/egspec-assets/egspec_basket.webp" alt="egspec_basketball_court">
                </div>
            </div>
        </div>
    </div>
</section>


@include('components.cta')
@endsection
