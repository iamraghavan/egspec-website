<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Desktop Slider -->
<div class="swiper-container desktop-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/images/egspec-1.webp" alt="Desktop Slide 1">
        </div>

        <div class="swiper-slide">
            <img src="assets/images/egspec-1.webp" alt="Desktop Slide 1">
        </div>

        <div class="swiper-slide">
            <img src="assets/images/egspec-1.webp" alt="Desktop Slide 1">
        </div>
        <!-- Add more slides as needed -->
    </div>
</div>

<!-- Mobile Slider -->
<div class="swiper-container mobile-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/images/holi_sale_3.webp" alt="Mobile Slide 1">
        </div>

        <div class="swiper-slide">
            <img src="assets/images/holi_sale_3.webp" alt="Mobile Slide 1">
        </div>

        <div class="swiper-slide">
            <img src="assets/images/holi_sale_3.webp" alt="Mobile Slide 1">
        </div>
        <!-- Add more slides as needed -->
    </div>
</div>

<script>
    // Initialize Swiper for desktop slider
    var desktopSwiper = new Swiper('.desktop-slider', {

        loop: true,
        autoplay: {
          delay: 5000,
        },
    });

    // Initialize Swiper for mobile slider
    var mobileSwiper = new Swiper('.mobile-slider', {

        loop: true,
        autoplay: {
          delay: 5000,
        },
    });

    // Function to toggle slider visibility based on screen size
    function toggleSlider() {
        if (window.innerWidth >= 720) { // Desktop or tablet size
            $('.desktop-slider').show();
            $('.mobile-slider').hide();
        } else { // Mobile device size
            $('.desktop-slider').hide();
            $('.mobile-slider').show();
        }
    }

    // Initial toggle on page load
    toggleSlider();

    // Listen for window resize event and toggle sliders accordingly
    $(window).on('resize', function() {
        toggleSlider();
    });
</script>

