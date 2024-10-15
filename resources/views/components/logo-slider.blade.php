<div class="rts-brand v_1 rts-padding-100">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="rts-section text-center mb--45">
                    <h2 class="rts-section-title">We are Accredited by</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <div class="rts-brand-slider swiper swiper-data swiper-initialized swiper-horizontal swiper-pointer-events"
                    data-swiper='{
                        "slidesPerView":7,
                        "loop": true,
                        "autoplay": {
                            "delay":"3000"
                        },
                        "breakpoints":{
                            "320":{
                                "slidesPerView": 3,
                                "centeredSlides": true
                            },
                            "575":{
                                "slidesPerView": 4,
                                "centeredSlides": true
                            },
                            "768":{
                                "slidesPerView": 5,
                                "centeredSlides": true
                            },
                            "991":{
                                "slidesPerView": 6,
                                "centeredSlides": true
                            },
                            "1201":{
                                "slidesPerView": 7,
                                "centeredSlides": true
                            }
                        }
                    }'>

                    <div class="swiper-wrapper">


                        @foreach($sliderImages as $sliderImage)
                        <div class="swiper-slide" style="width: 154.286px; margin-right: 30px;">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{ asset($sliderImage->image_url) }}?width=600" media="(min-width: 600px)">
                                        <source srcset="{{ asset($sliderImage->image_url) }}?width=300" media="(max-width: 599px)">
                                        <img src="{{ asset($sliderImage->image_url) }}" alt="{{ $sliderImage->alt_tag }}" loading="lazy" width="154.286" height="auto">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    /* Ensure images are consistent in size and alignment */
    .single-brand-logo {
        display: flex;
        justify-content: center; /* Center the image in its container */
        align-items: center; /* Center the image vertically */
    }

    .single-brand-logo img {
        width: 100%; /* Ensure the image fills the container */
        height: auto; /* Maintain aspect ratio */
        max-width: 200px; /* Set a maximum width */
        padding: 1rem; /* Add some padding for spacing */
    }

    .swiper-slide {
        display: flex; /* Ensure swiper slides are flex containers */
        justify-content: center; /* Center content horizontally */
        align-items: center; /* Center content vertically */
    }

    /* Apply CSS only above tablet screens */
    @media (min-width: 768px) {
        .single-brand-logo img {
            padding: 2rem !important; /* Adjust padding for larger screens */
        }
    }
    </style>

