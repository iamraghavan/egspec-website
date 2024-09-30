@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Laboratries'
])


<div class="rts-campus-section rts-section-padding pb-0 v_3 pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section rt-center mb--35">
                <h3 class="rts-section-title animated fadeIn">Laboratries</h3>
            </div>
        </div>
        <div class="row g-5">
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="https://egspec.blob.core.windows.net/egspec-assets/laboratries/computer_laboratory.webp" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title">
                                <a href="{{url('/facilities/laboratries/computer-laboratory')}}">Computer Laboratory</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="{{ asset('assets/images/campus/12.jpg') }}" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title">
                                <a href="{{url('/facilities/laboratries/civil-laboratory')}}">Civil Laboratory</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="{{ asset('assets/images/campus/12.jpg') }}" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title">
                                <a href="{{url('/facilities/laboratries/electronics-laboratory')}}">Electronics Laboratory</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="{{ asset('assets/images/campus/12.jpg') }}" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title">
                                <a href="{{url('/facilities/laboratries/electrical-laboratory')}}">Electrical Laboratory</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-item">
                    <div class="single-item__content">
                        <div class="single-item__image">
                            <img src="{{ asset('assets/images/campus/12.jpg') }}" alt="item-image">
                        </div>
                        <div class="single-item__meta">
                            <h5 class="item-title">
                                <a href="{{url('/facilities/laboratries/mechanical-laboratory')}}">Mechanical Laboratory</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


@include('components.cta')
@endsection
