@php
$testimonials = [
[
'quote' => "My Gratitude and appreciation to the EGS Pillay College for Finding
technical Education to the socio-economic background in Tamil Nadu. My appreciation
to the Parents and Teachers for producing 31 Gold Medalists, 100% placement. Wish
you all the Success.",
'profile_img' => "assets/images/web/profile-1.webp",
'author' => "Dr.Ganesan",
'position' => "Registrar, Anna University"
],
[
'quote' => "EGS Pillay Engineering College – Rural background college and produced
students as highly talented and qualified in the social market. It is a talent pool
for students and teachers to acquire knowledge and a platform for success.",
'profile_img' => "assets/images/web/profile-2.webp",
'author' => "Mr.M.Sivakumar",
'position' => "CEO, ICTACT"
]
];
@endphp

<div class="rts-testimonial v_2 rt-relative pt--120 pb--180">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="rts-section text-center mb--45">
                    <h2 class="rts-section-title">Testimonial &amp; Feedback</h2>
                </div>
            </div>
        </div>
        <!-- testimonial content -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="rts-testimonial-box">
                    <div class="testimonial-item rt-flex">
                        <div class="testimonial-item-image">
                            <img src="assets/images/web/1.webp" alt="testimonial thumbnail">
                            <a href="https://www.youtube.com/watch?v=FMcbgQWf52U" class="video-play popup-video">
                                <img src="assets/images/icon/video-btn.svg" alt="video">
                            </a>
                        </div>
                        <div class="testimonial-item-content w-630 rt-relative">
                            <div
                                class="testmonial-v2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-f6f61dfe6557cae4" aria-live="polite"
                                    style="transform: translate3d(-630px, 0px, 0px); transition-duration: 0ms;">






                                    @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
                <div class="single-testimonial">
                    <div class="rt-between mb--50">
                        <div class="rt-icon">
                            <img src="@s3url('quote.svg')" alt="quote icon">
                        </div>
                    </div>
                    <p class="testimonial-text">{{ $testimonial['quote'] }}</p>
                    <div class="rt-testimonial-author mt--50">
                        <div class="rt-author-meta rt-flex rt-gap-20">
                            <div class="rt-author-img">
                                <img src="{{ asset($testimonial['profile_img']) }}" alt="author">
                            </div>
                            <div class="rt-author-info">
                                <h5 class="mb-1">{{ $testimonial['author'] }}</h5>
                                <p>{{ $testimonial['position'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <!-- rts dot -->
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 3"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


