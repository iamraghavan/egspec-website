@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Vision and Mission' ])



<!--====================  About us / Our Focus  ====================-->

<div class="page-content-top rts-event-details pt--120">
    <div class="container">
        <div class="row justify-content-md-center justify-content-start">
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">Vision & Mission of the Institution</h4>
                                {{-- <p class="description">Vision</p> --}}
                            </div>
                        </div>
                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            <div class="single-feature">
                                <p class="feature-heading">Vision</p>
                                <p class="feature-description">Envisioned to transform our institution into a "Global Centre of Academic Excellence"</p>
                            </div>


                            <div class="single-feature">
                                <p class="feature-heading">Mission</p>
                                <ul>
                                    <li>
                                        <p>To provide world-class education to the students and to bring out their inherent talents</p>
                                    </li>
                                    <li>
                                        <p>To establish state-of-the-art facilities and resources required to achieve excellence in teaching-learning and supplementary processes</p>
                                    </li>
                                    <li>
                                        <p>To recruit competent faculty and staff and to provide opportunities to upgrade their knowledge and skills</p>
                                    </li>
                                    <li>
                                        <p>To have regular interaction with the industries in the area of R&D and offer consultancy, training, and testing services</p>
                                    </li>
                                    <li>
                                        <p>To establish centers of excellence in the emerging areas of research</p>
                                    </li>
                                    <li>
                                        <p>To offer continuing education and non-formal vocational education programs that are beneficial to society</p>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



@include('components.cta')
@endsection

