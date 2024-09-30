@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Placement',
'value_2' => '',
'value_3' => '',
'page_title' => 'Our Top Recruiters' ])

<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Our Top Recruiters
                    </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->


            @foreach(range(1, 27) as $i)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="">

                                <img class="iaps" src="{{ Storage::disk('azure')->url('placement/'.$i.'.webp') }}" alt="Placement Company {{ $i }}">

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
.iaps {

    max-width: 100% !important;
    height: auto !important;
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
