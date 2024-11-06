@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Industry Academic Partnering' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->


<div class="page-content-top pt--120 pt__md--80" element-id="424">
    <div class="container" element-id="423">
        <div class="row" element-id="422">
            <h3 class="rts-section-title animated fadeIn" element-id="421">Idea</h3>
            <p class="desc" element-id="420">The idea of a "gap" between research done in academia and its translation into marketable products certainly is not new. What is new are the steps some academic institutions and companies are taking to bridge that gap.

        </div>
    </div>
</div>

<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Industrial Collaboration
                    </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->


            @foreach($iap->where('categories_js', 'industrial collaboration') as $partner)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="event-speaker">
                    <div class="event-speaker__details">
                        <div class="">
                            @if(!empty($partner->logo_image_url))
                                <img class="iap" src="{{ $partner->logo_image_url }}" alt="{{ $partner->alt_name }}">
                            @else
                                <h3 class="iap-h3">{{ $partner->alt_name }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach






        </div>
    </div>
</div>

<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Academic Partners
                    </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->


            @foreach($iap->where('categories_js', 'industrial academic partners') as $partner)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="event-speaker">
                    <div class="event-speaker__details">
                        <div class="">
                            @if(!empty($partner->logo_image_url))
                                <img class="iap" src="{{ $partner->logo_image_url }}" alt="{{ $partner->alt_name }}">
                            @else
                                <h3 class="iap-h3">{{ $partner->alt_name }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach






        </div>
    </div>
</div>



<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Academic Training
                    </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->


            @foreach($iap->where('categories_js', 'industrial academic training') as $partner)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="event-speaker">
                    <div class="event-speaker__details">
                        <div class="">
                            @if(!empty($partner->logo_image_url))
                                <img class="iap" src="{{ $partner->logo_image_url }}" alt="{{ $partner->alt_name }}">
                            @else
                                <h3 class="iap-h3">{{ $partner->alt_name }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach






        </div>
    </div>
</div>

<style>
    /* Style for the image */
.iap {

    max-width: 100% !important;
    height: 4rem;
    FONT-WEIGHT: 200;
    margin: 3rem;
}

/* Style for the heading */
.iap-h3 {
    text-align: center !important;
    font-size: 18px !important;
    margin: 20px 0 !important;
    color: #333 !important;
}

</style>

@include('components.cta')

@endsection
