<!-- Desktop Carousel -->
<div id="desktopCarousel" class="splide unique-desktop-carousel carousel-container">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($posterSlider as $slide)
                <li class="splide__slide">
                    <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                        <picture>
                            <source srcset="{{ asset(str_replace('.jpg', '.webp', $slide->desktop_image_url)) }}" type="image/webp">
                            <img
                                src="{{ asset($slide->desktop_image_url) }}"
                                alt="{{ $slide->alt_name }}"
                                class="d-block"
                                style="object-fit: cover; width: 100%; height: auto;"
                                loading="lazy"
                                onerror="console.error('Image not found:', this.src)"
                            >
                        </picture>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="splide__progress">
        <div class="splide__progress__bar"></div>
    </div>
</div>

<!-- Mobile Carousel -->
<div id="mobileCarousel" class="splide unique-mobile-carousel carousel-container">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($posterSlider as $slide)
                <li class="splide__slide">
                    <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                        <picture>
                            <source srcset="{{ asset(str_replace('.jpg', '.webp', $slide->mobile_image_url)) }}" type="image/webp">
                            <img
                                src="{{ asset($slide->mobile_image_url) }}"
                                alt="{{ $slide->alt_name }}"
                                class="d-block"
                                style="object-fit: cover; width: 100%; height: auto;"
                                loading="lazy"
                                onerror="console.error('Image not found:', this.src)"
                            >
                        </picture>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="splide__progress">
        <div class="splide__progress__bar"></div>
    </div>
</div>

<style>
    @import url('https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');

    .carousel-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .splide__list {
        display: flex;
    }

    .splide__slide {
        min-width: 100%;
        box-sizing: border-box;
    }

    @media (min-width: 769px) {
        .unique-mobile-carousel {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .unique-desktop-carousel {
            display: none;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js" integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let desktopCarousel;
        let mobileCarousel;

        function initCarousel() {
            desktopCarousel = new Splide('#desktopCarousel', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 5000,
                pagination: true,
                progress: true,
                arrows: true,
            });

            mobileCarousel = new Splide('#mobileCarousel', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 5000,
                pagination: true,
                progress: true,
                arrows: false,
            });

            toggleCarousel();
        }

        function toggleCarousel() {
            if (window.innerWidth >= 769) {
                if (mobileCarousel && mobileCarousel.state.is(3)) {
                    mobileCarousel.destroy();
                }
                if (!desktopCarousel.state.is(3)) {
                    desktopCarousel.mount();
                }
            } else {
                if (desktopCarousel && desktopCarousel.state.is(3)) {
                    desktopCarousel.destroy();
                }
                if (!mobileCarousel.state.is(3)) {
                    mobileCarousel.mount();
                }
            }
        }

        initCarousel();
        window.addEventListener('resize', toggleCarousel);
    });
</script>
