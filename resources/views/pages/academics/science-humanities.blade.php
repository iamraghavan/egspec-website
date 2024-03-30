@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Science and Humanities' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-6">
                    <h3 class="rts-section-title animated fadeIn">Science and Humanities Course at EGS Pillay Engineering College</h3>
                </div>
                <div class="col-lg-6">
                    <p class="rts-section-description">The Department of Science and Humanities provides a comprehensive academic program at EGS Pillay Engineering College, offering courses tailored to students' needs. Our curriculum encompasses a wide range of subjects, including mathematics, physics, chemistry, and language studies, providing a strong foundation for students pursuing diverse career paths.</p>
                </div>
            </div>
        </div>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <div class="program-description-area" id="curriculum">
                        <div class="program-big-thumb">
                            <img src="https://egspec.blob.core.windows.net/egspec-assets/science-humanities.jpg" alt="EGSPEC Science and Humanities">
                        </div>
                        <div class="program-about">
                            <h4 class="title">About The Department</h4>
                            <p>The Department of Science and Humanities at EGS Pillay Engineering College was established in 1995 with a commitment to excellence in education and research.</p>
                            <p>Our department is home to a team of highly qualified and experienced faculty members who are actively involved in teaching, research, and consultancy services. With expertise in various fields, our faculty members have collectively published over 262 research papers in prestigious international and national journals. They have also presented their research findings at numerous international and national conferences.</p>
                        </div>


                        <div class="program-credit-area">
                            <h5 class="title">Program Courses</h5>
                            <p>Core Required Courses for all majors:</p>
                            <div class="program-accordion">
                                <div class="accordion" id="rts-accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Year One
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#rts-accordion" style="">
                                            <div class="accordion-body-content">
                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Spring Semester 1</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Summer Semester 2 (Summer
                                                                Session IV)</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Spring Semester 1</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Year Two
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#rts-accordion">
                                            <div class="accordion-body-content">
                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Spring Semester 1</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Summer Semester 2 (Summer
                                                                Session IV)</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table">
                                                    <thead class="table-theme">
                                                        <tr>
                                                            <th style="min-width: 80%;">Spring Semester 1</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Introduction to Africana Studies or GSS 2201 - Africana
                                                                Studies</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>The Contemporary African Diaspora</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>African-Americans: A Seminar</td>
                                                            <td>3 Credits</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="program-student-testimonial rt-relative">
                            <h5 class="title">Student Testimonials</h5>
                            <div class="single-testimonial-box">
                                <div
                                    class="single-testimonial-active swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                    <div class="swiper-wrapper" id="swiper-wrapper-d8e21e84c87cf712" aria-live="polite"
                                        style="transform: translate3d(-1730px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 2"
                                            style="width: 402.5px; margin-right: 30px;" data-swiper-slide-index="0">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            role="group" aria-label="2 / 2" style="width: 402.5px; margin-right: 30px;"
                                            data-swiper-slide-index="1">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide swiper-slide-duplicate-active" role="group"
                                            aria-label="1 / 2" style="width: 402.5px; margin-right: 30px;"
                                            data-swiper-slide-index="0">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                            role="group" aria-label="2 / 2" style="width: 402.5px; margin-right: 30px;"
                                            data-swiper-slide-index="1">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
                                            role="group" aria-label="1 / 2" style="width: 402.5px; margin-right: 30px;"
                                            data-swiper-slide-index="0">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                            role="group" aria-label="2 / 2" style="width: 402.5px; margin-right: 30px;"
                                            data-swiper-slide-index="1">
                                            <div class="single-testimonial-item rt-relative">
                                                <div class="rating-star mb--10">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </div>
                                                <p class="rt-testimonial-text">
                                                    I can't recommend The Gourmet Haven enough. It's a place for special
                                                    date in nights, or whenever you're in the mood for a culinary.
                                                </p>
                                                <div class="rt-testimonial-author mt--30">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-0">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                            tabindex="0" role="button" aria-label="Go to slide 1"
                                            aria-current="true"></span><span class="swiper-pagination-bullet"
                                            tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Science and Humanities Events</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#curriculum"><span><i class="fa-light fa-arrow-right"></i></span>
                                            Sample Event 1</a></li>
                                    <li><a href="faculty-details.html"><span><i
                                                    class="fa-light fa-arrow-right"></i></span>Sample Event 2</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <div class="program-info">
                            <h5>Contact Info</h5>
                            <p>Science and Humanities</p>
                            <div class="contact-info">
                                <h5>Contact:</h5>
                                <a href="mailto:barry.studyhub@info.com">mba@egspec.org</a>
                                <a href="callto:">+91 99425 02245</a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
