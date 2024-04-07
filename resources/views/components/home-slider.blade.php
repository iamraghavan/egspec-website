

<!-- Desktop Slider -->
<div class="swiper-container desktop-slider">

<div class="swiper-wrapper">
    @foreach ($posterSlider as $a)

    <div class="swiper-slide">
        <a href="{{$a->href_link}}" target="_blank" rel="noopener noreferrer">
        <img src="{{asset($a->desktop_image_url)}}" alt="{{$a->alt_name}}">
        </a>
    </div>

    @endforeach
</div>


</div>

<!-- Mobile Slider -->
<div class="swiper-container mobile-slider">
    <div class="swiper-wrapper">
        @foreach ($posterSlider as $a)
        <div class="swiper-slide">
            <a href="{{$a->href_link}}" target="_blank" rel="noopener noreferrer">
            <img src="{{$a->mobile_image_url}}" alt="{{$a->alt_name}}">
            </a>
        </div>
        @endforeach


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

