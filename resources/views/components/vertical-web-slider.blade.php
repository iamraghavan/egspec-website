@php
    $filteredAdsSliders = \App\Models\AdsSlider::where('page_sections', 'general');

if (!empty($pageSections)) {
    $filteredAdsSliders->orWhere('page_sections', $pageSections);
}

$filteredAdsSliders = $filteredAdsSliders->get();

@endphp

@if($filteredAdsSliders->isNotEmpty())
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($filteredAdsSliders as $adsSlider)
                <div class="swiper-slide">
                    <img class="ad-image" src="{{ $adsSlider->vertical_slider_url }}" alt="{{ $adsSlider->vertical_slider_alt_name }}">
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
@else
    <p>No ads sliders found.</p>
@endif

<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true, // Loop the slides
        centeredSlides: true, // Center the active slide
        autoplay: {
            delay: 2500, // Auto-slide every 3 seconds
            disableOnInteraction: false, // Continue autoplay after user interactions
        },
        pagination: {
            el: '.swiper-pagination', // Pagination container
            clickable: false, // Enable clickable pagination bullets
        },
        slidesPerView: 1, // Show only one slide at a time
        spaceBetween: 10000, // Remove space between slides
        effect: 'creative',
        speed: 1000, // Smooth slide effect
    });
</script>




