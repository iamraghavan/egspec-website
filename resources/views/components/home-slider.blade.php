<!-- Desktop Slider -->
<div class="swiper-container desktop-slider">
    <div class="swiper-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset($slide->desktop_image_url) }}" alt="{{ $slide->alt_name }}">
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Mobile Slider -->
<div class="swiper-container mobile-slider">
    <div class="swiper-wrapper">
        @foreach ($posterSlider as $slide)
        <div class="swiper-slide">
            <a href="{{ $slide->href_link }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ $slide->mobile_image_url }}" alt="{{ $slide->alt_name }}">
            </a>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
            var desktopSlider = document.querySelector('.desktop-slider');
            var mobileSlider = document.querySelector('.mobile-slider');
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
