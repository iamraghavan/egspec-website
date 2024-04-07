@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Admissions',
    'value_2' => 'TNEA ' . (date('Y') - 1),
    'value_3' => '',
    'page_title' => 'TAMIL NADU ENGINEERING ADMISSIONS ' . (date('Y') - 1)
])

<div class="page-content-top rts-event-details pt--120">
    <div class="container">
        <div class="row justify-content-md-center justify-content-start">
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">TNEA {{date('Y') -1}}</h4>
                                <p class="description">TNEA {{date('Y') - 1}} – Information About Online Application and Counselling Details</p>
                            </div>
                        </div>
                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            <div class="single-feature">
                                <p class="feature-heading">What is TNEA - {{date('Y') -1}} ?</p>
                                <p class="feature-description">Tamil Nadu Engineering Admissions (TNEA) is overseen by the Directorate of Technical Education, Tamil Nadu,
                                    to facilitate admissions for candidates across various engineering colleges in the state. TNEA counseling in {{date('Y') -1}} represents a streamlined approach, employing a single-window system to ensure transparency in the admission process. Utilizing the TNEA rank list,
                                    candidates are granted admission to undergraduate programs such as Bachelor of Engineering (B.E.) and Bachelor of Technology (B.Tech.) in Tamil Nadu colleges.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


@endsection
