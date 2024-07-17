<!-- Desktop Slider -->
<div class="swiper-container unique-desktop-slider-container">
    <div class="swiper-wrapper unique-desktop-slider-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide unique-desktop-slider-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset($slide->desktop_image_url) }}" alt="{{ $slide->alt_name }}" class="unique-desktop-slide-img">
            </a>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    {{-- <div class="swiper-pagination unique-desktop-swiper-pagination"></div> --}}
    <!-- Add Navigation -->
    {{-- <div class="swiper-button-next unique-desktop-swiper-button-next"></div>
    <div class="swiper-button-prev unique-desktop-swiper-button-prev"></div> --}}
</div>

<!-- Mobile Slider -->
<div class="swiper-container unique-mobile-slider-container">
    <div class="swiper-wrapper unique-mobile-slider-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide unique-mobile-slider-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ $slide->mobile_image_url }}" alt="{{ $slide->alt_name }}" class="unique-mobile-slide-img">
            </a>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    {{-- <div class="swiper-pagination unique-mobile-swiper-pagination"></div> --}}
    <!-- Add Navigation -->
    {{-- <div class="swiper-button-next unique-mobile-swiper-button-next"></div>
    <div class="swiper-button-prev unique-mobile-swiper-button-prev"></div> --}}
</div>
<style>
    /* Unique CSS for Desktop Slider */
/* .unique-desktop-slider-container {
    width: 100%;
    height: 100vh;
} */

.unique-desktop-slider-wrapper {
    display: flex;
    transition-property: transform;
    transition-timing-function: ease-in-out;
}

.unique-desktop-slider-slide {
    flex: 0 0 100%;
    width: 100%;
    height: 100vh; /* Ensure each slide takes full viewport height */
}

.unique-desktop-slide-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (min-width: 769px) {
    .unique-desktop-slider-container {
        display: block;
    }

    .unique-mobile-slider-container {
        display: none;
    }
}

/* Unique CSS for Mobile Slider */
/* .unique-mobile-slider-container {
    width: 100%;
    height: 100vh;
} */

.unique-mobile-slider-wrapper {
    display: flex;
    transition-property: transform;
    transition-timing-function: ease-in-out;
}

.unique-mobile-slider-slide {
    flex: 0 0 100%;
    width: 100%;
    height: 100vh;
}

.unique-mobile-slide-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .unique-desktop-slider-container {
        display: none;
    }

    .unique-mobile-slider-container {
        display: block;
    }
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Initialize Swiper for desktop slider
    var desktopSwiper = new Swiper('.unique-desktop-slider-container', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 3000, // Speed of transition
        effect: 'slide', // Use 'slide' effect for smooth animation

    });

    // Initialize Swiper for mobile slider
    var mobileSwiper = new Swiper('.unique-mobile-slider-container', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 3000, // Speed of transition
        effect: 'slide', // Use 'slide' effect for smooth animation

    });

    // Function to toggle slider visibility based on screen size
    function toggleSlider() {
            var desktopSlider = document.querySelector('.unique-desktop-slider-container');
            var mobileSlider = document.querySelector('.unique-mobile-slider-container');
            if (window.innerWidth >= 720) { // Desktop or tablet size
                desktopSlider.style.display = 'block';
                mobileSlider.style.display = 'none';
            } else { // Mobile device size
                desktopSlider.style.display = 'none';
                mobileSlider.style.display = 'block';
            }
        }

        // Initial toggle on page load
        toggleSlider();

        // Listen for window resize event and toggle sliders accordingly
        window.addEventListener('resize', function() {
            toggleSlider();
        });
    });

</script>
