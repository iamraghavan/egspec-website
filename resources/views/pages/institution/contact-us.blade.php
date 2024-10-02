@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Support',
    'value_3' => '',
    'page_title' => 'Contact Us'
])


<div class="rts-campus-contact pt--40 pb--20">
    <div class="container">

        <div class="contact-method">
            <div class="row justify-content-md-start justify-content-sm-center g-5">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact-method__single">
                        <div class="contact-img-bg">
                            <img src="https://egspec.blob.core.windows.net/egspec-assets/engineering_college.webp" alt="">
                        </div>
                        <div class="contact-text">
                            <h3 class="contact-title animated fadeIn">EGSPEC</h3>
                            <p class="description">Old, Nagore Main Rd, Thethi village, Nagore, Nagapattinam, Tamil Nadu 611002</p>
                            <div class="contact-link">
                                <a href="callto:04365251114">04365 - 251114</a>
                                <a href="mailto:enquiry@egspec.org">enquiry@egspec.org</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact-method__single">
                        <div class="contact-img-bg">
                            <img src="{{asset('assets/images/egs-pillay-engineering-college-nagore-nagapattinam-colleges-ycrzqy.webp')}}" alt="">
                        </div>
                        <div class="contact-text">
                            <h3 class="contact-title animated fadeIn">Office of the Controller of Examinations</h3>
                            {{-- <p class="description">University of London, 15 Talbot Square, Tyburnia, London W2 1TT, UK</p> --}}
                            <div class="contact-link">
                                <a href="callto:04365251112">04365 - 251112</a>
                                <a href="mailto:enquiry@egspec.org">enquiry@egspec.org</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact-method__single">
                        <div class="contact-img-bg">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVFnCZ3dnscJRpgFxKnTi0D8FHBql_Xj-zzFiVftsPBf-6Rdnzy3D_upX0huNF529ub2E&usqp=CAU" alt="">
                        </div>
                        <div class="contact-text">
                            <h3 class="contact-title animated fadeIn">Admission Office</h3>

                            <div class="contact-link">
                                <a href="callto:8608954537">(+91) 86089 54537</a>
                                <a href="callto:9976888999"> (+91) 99768 88999</a>
                                <a href="mailto:admission@egspec.org">admission@egspec.org</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map mt--30">
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0990205759113!2d79.83068877588389!3d10.803727658687817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a556ca2018f1961%3A0xa99f9848f54a5c9!2sEGS%20Pillay%20Engineering%20College(Autonomous)!5e0!3m2!1sen!2sin!4v1727851017303!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    </div>

</div>

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="rts-ap-section">
                    <h3 class="rts-section-title mb--30 animated fadeIn">Contact us - Talk to Our College Team</h3>
                    <div class="rts-application-form">
                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" style="margin: 0; width: 100%; border: none;">
                            @csrf

                            <div class="single-form-part">
                                <h5 class="form-title">Contact Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="egspec_rj_name">Name</label>
                                        <input type="text" id="egspec_rj_name" name="name" class="input-field" placeholder="Full Name" required oninput="this.value = this.value.toUpperCase()">
                                        @error('name')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="egspec_rj_email">Email ID</label>
                                        <input type="email" id="egspec_rj_email" name="email" class="input-field" placeholder="example@gmail.com" required>
                                        @error('email')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="egspec_rj_phone">Phone Number</label>
                                        <input type="text" id="egspec_rj_phone" name="phone" class="input-field" placeholder="Enter 10 digit number" pattern="\d{10}" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        @error('phone')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="single-form-part">
                                <h5 class="form-title">Requirements</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="egspec_rj_requirement">Select Requirement</label>
                                        <select name="requirement" id="egspec_rj_requirement" required onchange="toggleDepartmentList()">
                                            <option value="">Select Requirement</option>
                                            <option value="admission_enquiry">Admission Enquiry</option>
                                            <option value="coe">Certificate of Eligibility</option>
                                            <option value="head_office">Head Office</option>
                                            <option value="placement">Placement</option>
                                            <option value="departments">Departments</option>
                                        </select>
                                        @error('requirement')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="single-input" id="department_list" style="display: none;">
                                    <div class="single-input-item">
                                        <label for="egspec_rj_department">Select Department</label>
                                        <select name="department" id="egspec_rj_department">
                                            <option value="">Select Department</option>
                                            <option value="MECH">Mechanical Engineering</option>
                                            <option value="CIVIL">Civil Engineering</option>
                                            <option value="EEE">Electrical and Electronics Engineering</option>
                                            <option value="ECE">Electronics and Communication Engineering</option>
                                            <option value="CSE">Computer Science and Engineering</option>
                                            <option value="IT">Information Technology</option>
                                            <option value="BME">Biomedical Engineering</option>
                                            <option value="CSBS">Computer Science & Business Systems Engineering</option>
                                            <option value="AIDS">Artificial Intelligence and Data Science</option>
                                        </select>
                                        @error('department')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="single-form-part">
                                <h5 class="form-title">Message</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="egspec_rj_message">Message <span id="charCount">0/300</span></label>
                                        <textarea id="egspec_rj_message" name="message" required maxlength="300" placeholder="Your message (max 300 characters)"></textarea>
                                        @error('message')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="single-input">
                                <div class="d-flex align-items-center single-checkbox mt--20">

                                </div>
                            </div>

                            <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                function toggleDepartmentList() {
                    const requirementSelect = document.getElementById('egspec_rj_requirement');
                    const departmentList = document.getElementById('department_list');
                    departmentList.style.display = (requirementSelect.value === 'departments') ? 'block' : 'none';
                }

                const message = document.getElementById('egspec_rj_message');
                const charCount = document.getElementById('charCount');

                message.addEventListener('input', function () {
                    const length = message.value.length;
                    charCount.textContent = `${length}/300`;

                    // Validate character count
                    if (length > 300) {
                        document.getElementById('messageError').textContent = 'Message cannot exceed 300 characters.';
                    } else {
                        document.getElementById('messageError').textContent = '';
                    }
                });
            </script>


        </div>
    </div>
</div>
@if (session('success'))
    <script>
        setTimeout(() => {
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Enter',
            });
        }, 500); // Delay to allow for UI rendering
    </script>
@endif

@if (session('error'))
    <script>
        setTimeout(() => {
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'Try Again',
            });
        }, 500); // Delay to allow for UI rendering
    </script>
@endif
<style>
    form{
        max-width: 100% !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactFormss');
    const message = document.getElementById('message');
    const charCount = document.getElementById('charCount');

    // Phone number validation
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function (e) {
        const value = e.target.value;
        if (value.length > 10) {
            e.target.value = value.slice(0, 10); // Allow only 10 digits
        }
    });

    // Character count for message
    message.addEventListener('input', function () {
        const length = message.value.length;
        charCount.textContent = `${length}/500`;
    });

    // Automatically convert name to uppercase
    function convertToUppercase(input) {
        input.value = input.value.toUpperCase();
    }

    // Toggle department dropdown
    function toggleDepartment() {
        const requirements = document.getElementById('requirements').value;
        const departmentSection = document.getElementById('departmentSelection');
        departmentSection.style.display = requirements === 'Departments' ? 'block' : 'none';
    }

    // Form validation
    form.addEventListener('submit', function (e) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        let isValid = true;

        // Validate name
        if (name === '') {
            document.getElementById('nameError').textContent = 'Name is required.';
            isValid = false;
        } else {
            document.getElementById('nameError').textContent = '';
        }

        // Validate email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Invalid email address.';
            isValid = false;
        } else {
            document.getElementById('emailError').textContent = '';
        }

        // Validate phone number
        if (!/^\d{10}$/.test(phone)) {
            document.getElementById('phoneError').textContent = 'Phone number must be 10 digits.';
            isValid = false;
        } else {
            document.getElementById('phoneError').textContent = '';
        }

        // Validate message length
        if (message.length > 500) {
            document.getElementById('messageError').textContent = 'Message cannot exceed 500 characters.';
            isValid = false;
        } else {
            document.getElementById('messageError').textContent = '';
        }

        if (!isValid) {
            e.preventDefault(); // Stop form submission
        }
    });
});

</script>
@endsection
