<!-- Desktop Slider -->
<div class="swiper-container unique-desktop-slider-container">
    <div class="swiper-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img  style="object-fit: cover; max-height: auto; width: 100%; aspect-ratio: auto; max-width: 100%;"
    loading="eager"
    fetchpriority="high"
    sizes="(min-width: 1350px) 1350px, 100vw" src="{{ asset($slide->desktop_image_url) }}" alt="{{ $slide->alt_name }}" class="unique-desktop-slide-img">
            </a>
        </div>
        @endforeach
    </div>
    <!-- <div class="swiper-pagination unique-desktop-swiper-pagination"></div>
    <div class="swiper-button-next unique-desktop-swiper-button-next"></div>
    <div class="swiper-button-prev unique-desktop-swiper-button-prev"></div> -->
</div>

<!-- Mobile Slider -->
<div class="swiper-container unique-mobile-slider-container">
    <div class="swiper-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ $slide->mobile_image_url }}" alt="{{ $slide->alt_name }}" class="unique-mobile-slide-img">
            </a>
        </div>
        @endforeach
    </div>
    <!-- <div class="swiper-pagination unique-mobile-swiper-pagination"></div>
    <div class="swiper-button-next unique-mobile-swiper-button-next"></div>
    <div class="swiper-button-prev unique-mobile-swiper-button-prev"></div> -->
</div>

<style>
    /* Ensure Swiper container fills its parent */
.swiper-container {
    width: 100%;
    height: 100%;
}

/* Adjust image size and fit */
.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Hide mobile slider initially on larger screens */
@media (min-width: 769px) {
    .unique-mobile-slider-container {
        display: none;
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
    speed: 2000, 
    effect: 'lide',     
    navigation: {
        nextEl: '.unique-desktop-swiper-button-next',
        prevEl: '.unique-desktop-swiper-button-prev',
    },
    pagination: {
        el: '.unique-desktop-swiper-pagination',
        clickable: true,
    },
    on: {
        slideChangeTransitionStart: function () {
            // Add smooth transition effect on slide change
            this.slides.forEach((slide) => {
                slide.classList.add('swiper-slide-transitioning');
            });
        },
        slideChangeTransitionEnd: function () {
            // Remove smooth transition effect on slide change
            this.slides.forEach((slide) => {
                slide.classList.remove('swiper-slide-transitioning');
            });
        },
    },
});

// Initialize Swiper for mobile slider
var mobileSwiper = new Swiper('.unique-mobile-slider-container', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    speed: 2000, // Adjusted speed for smooth slow sliding
    effect: 'lide', // Slide effect for smooth animation
    direction: 'rtl', // Add this property to make the slider slide from right to left
    navigation: {
        nextEl: '.unique-mobile-swiper-button-next',
        prevEl: '.unique-mobile-swiper-button-prev',
    },
    pagination: {
        el: '.unique-mobile-swiper-pagination',
        clickable: true,
    },
    on: {
        slideChangeTransitionStart: function () {
            // Add smooth transition effect on slide change
            this.slides.forEach((slide) => {
                slide.classList.add('swiper-slide-transitioning');
            });
        },
        slideChangeTransitionEnd: function () {
            // Remove smooth transition effect on slide change
            this.slides.forEach((slide) => {
                slide.classList.remove('swiper-slide-transitioning');
            });
        },
    },
});

        // Function to toggle slider visibility based on screen size
        function toggleSlider() {
            var desktopSlider = document.querySelector('.unique-desktop-slider-container');
            var mobileSlider = document.querySelector('.unique-mobile-slider-container');
            if (window.innerWidth >= 769) { // Desktop or tablet size
                desktopSwiper.update(); // Update swiper instance
                desktopSlider.style.display = 'block';
                mobileSlider.style.display = 'none';
            } else { // Mobile device size
                mobileSwiper.update(); // Update swiper instance
                desktopSlider.style.display = 'none';
                mobileSlider.style.display = 'block';
            }
        }

        // Initial toggle on page load
        toggleSlider();

        // Listen for window resize event and toggle sliders accordingly
        window.addEventListener('resize', function () {
            toggleSlider();
        });
    });
</script>
