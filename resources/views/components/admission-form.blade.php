<section class="rts-application-area moving pt--120 rts-application-area-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="rts-section rt-center mb--50 w-460">
                <h2 class="rts-section-title mb--10 rt-white">Admission Open {{ date('Y') }} - {{ date('Y', strtotime('+1 year')) }}</h2>
                <p class="rt-white"></p>
            </div>
        </div>
        <!-- application form -->
        <div class="row justify-content-md-center">
            <div class="col-md-11 col-lg-6 col-xl-7">
                <div class="rts-admission-form-image">
                    <img src="{{asset('assets/images/admission-form.webp')}}" alt="EGSPEC">
                </div>
            </div>
            <div class="col-md-11 col-lg-6 col-xl-5">
                <div class="rts-application-form">
                    <div class="rts-application-form-content">
                        {{-- <h5 class="heading-title  mb--25">Application Form</h5> --}}
                        <form action="" method="POST" class="rts-form">
                            @csrf
                            <div class="rts-input w-full">
                                <div class="single-input">
                                    <input type="text" name="candidate_name" id="candidate_name" placeholder="Candidate Name" required="">
                                </div>
                            </div>
                            <div class="rts-input w-full">
                                <div class="single-input">
                                    <input type="email" name="email" id="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="rts-input rt-flex">
                                <div class="single-input">
                                    <input type="text" name="whatsapp_number" id="number" placeholder="Whatsapp Number" required="">
                                </div>
                                <div class="single-input">
                                    <a style="min-width: 180px; padding: 10px 10px;" class="rts-theme-btn rts-nbg-btn btn-arrow">Get OTP <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>



                            <div class="rts-input w-full">
                                <div class="single-input">
                                    <select name="category" style="padding: 10px;" id="category" required="" onchange="showCourses(this.value)">
                                        <option value="" disabled selected>Select Category</option>
                                        <!-- Dynamically populate category types from coursesByCategory -->
                                        @foreach($coursesByCategory as $category => $courses)
                                            <option value="{{ $category }}">{{ ucfirst($category) }} Programs</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="rts-input w-full" id="courses-section" style="display:none;">
                                <div class="single-input">
                                    <select name="course" style="padding: 10px;" id="course" required="">
                                        <option value="" disabled selected>Select Course</option>
                                        <!-- Courses will be populated based on category selection -->
                                    </select>
                                </div>
                            </div>

                            <script>
                                function showCourses(category) {
                                    if (category) {
                                        // Show the courses section
                                        document.getElementById('courses-section').style.display = 'block';

                                        // Fetch courses for the selected category
                                        const coursesByCategory = @json($coursesByCategory);

                                        // Get courses for the selected category
                                        const selectedCourses = coursesByCategory[category] || [];

                                        // Get the course dropdown element
                                        const courseDropdown = document.getElementById('course');

                                        // Clear existing options
                                        courseDropdown.innerHTML = '<option value="" disabled selected>Select Course</option>';

                                        // Add the new options based on the selected category
                                        selectedCourses.forEach(course => {
                                            const option = document.createElement('option');
                                            option.value = course.id;
                                            option.textContent = course.course_name;
                                            courseDropdown.appendChild(option);
                                        });
                                    } else {
                                        // Hide the courses section if no category is selected
                                        document.getElementById('courses-section').style.display = 'none';
                                    }
                                }
                            </script>

                            <button type="submit" class="rts-theme-btn rts-nbg-btn btn-arrow v2 full-btn">Apply Now <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
