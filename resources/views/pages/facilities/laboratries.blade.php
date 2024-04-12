@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Laboratries'
])


<div class="rts-campus-section rts-section-padding pb-0 v_3">
    <div class="container">
        <div class="row">
            <div class="rts-section rt-center mb--35">
                <h3 class="rts-section-title animated fadeIn">The Research Enterprise</h3>
            </div>
        </div>
        <div class="row g-5">
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="assets/images/campus/12.jpg" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title"><a href="program-single.html">Interdisciplinary Research</a></h5>
                            <p class="item-description">At the intersection of disciplines is where new ideas emerge and innovative research happens</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="assets/images/campus/13.jpg" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title"><a href="program-single.html">Institutes, Labs &amp; Centers</a></h5>
                            <p class="item-description">Fifteen independent labs, centers, and institutes engage faculty and students from university.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="assets/images/campus/14.jpg" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title"><a href="program-single.html">Other Research Centers &amp; Labs</a></h5>
                            <p class="item-description">Academic departments sponsor numerous other research centers and labs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single item end -->
        </div>
    </div>
</div>


@include('components.cta')
@endsection
