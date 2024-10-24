@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Placement',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Placement Gallery'
])

<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    Placement Gallery
                </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->
            @foreach(range(1, 12) as $i)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="">
                                <a href="{{ asset('/assets/images/placement/'.$i.'.webp') }}" data-fancybox="gallery" data-caption="Placement {{ $i }}">
                                    <img class="iaps" src="{{ asset('/assets/images/placement/'.$i.'.webp') }}" alt="Placement {{ $i }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Include Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<!-- Include jQuery and Fancybox JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<style>
    /* Style for the image */
    .iaps {
        max-width: 100% !important;
        height: auto !important;
        font-weight: 200;
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

<script>
    $(document).ready(function() {
        $('[data-fancybox="gallery"]').fancybox({
            // Optional options
            buttons: [
                "zoom",
                "slideShow",
                "thumbs",
                "close"
            ],
            caption: function( instance, item ) {
                return $(this).data('caption');
            }
        });
    });
</script>

@include('components.cta')
@endsection
