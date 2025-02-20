@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Contact',
    'value_3' => 'Web Admin',
    'page_title' => 'Contact Web Admin / Webmaster'
])

<style>
    textarea {
        resize: vertical;
        border: 1px solid var(--rt-line);
    padding: 17px 20px;
    height: auto;
    line-height: 100%;
    position: relative;
    }
</style>



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="rts-ap-section">
                    <h3 class="rts-section-title mb--30 animated fadeIn">Application Details</h3>
                    <div class="rts-application-form">






                        <form id="contactForm" action="{{ route('form.submit') }}" method="POST" style="margin: 0px !important; width: 100% !important; border: none !important; max-width: 100%;">
                            @csrf
                            <div class="single-form-part">
                                <h5 class="form-title">Personal Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="input-field"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror



                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" class="input-field"
                       placeholder="12345 67890" pattern="\d{5}\s\d{5}"
                       title="Please enter a phone number in the format: 12345 67890"
                       value="{{ old('phone') }}" required oninput="formatPhoneNumber(this)">
                @error('phone')
                    <span class="error-message">{{ $message }}</span>
                @enderror

                                    </div>

                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="input-field"
                                               value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="address">Address</label>
                                        <textarea id="address" name="address" class="input-field"
                                                  required>{{ old('address') }}</textarea>
                                        @error('address')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="single-form-part">

                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="relationship">Your Relationship with EGSPEC</label>
                                        <select name="relationship" id="relationship" required
                                                onchange="toggleRollNumber()">
                                            <option value="">Select Relationship</option>
                                            <option value="student" {{ old('relationship') == 'student' ? 'selected' : '' }}>
                                                EGSPEC Student
                                            </option>
                                            <option value="parent" {{ old('relationship') == 'parent' ? 'selected' : '' }}>
                                                Parent of EGSPEC Student
                                            </option>
                                            <option value="public" {{ old('relationship') == 'public' ? 'selected' : '' }}>
                                                Public
                                            </option>
                                            <option value="alumni" {{ old('relationship') == 'alumni' ? 'selected' : '' }}>
                                                EGSPEC Alumni
                                            </option>
                                        </select>
                                        @error('relationship')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>

 <div class="single-input-item" id="rollNumberField" style="display: none;">
    <label class="input-label" for="roll_number">Roll Number</label>
    <input type="text" id="roll_number" name="roll_number"
           class="input-field" value="{{ old('roll_number') }}"
           pattern="[A-Za-z0-9]+" title="Please enter alphanumeric characters only">
    @error('roll_number')
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="category">Category</label>
                <select name="category" id="category" required>
                    <option value="">Select Category</option>
                    <option value="admission" {{ old('category') == 'admission' ? 'selected' : '' }}>
                        Admission
                    </option>
                    <option value="hostel" {{ old('category') == 'hostel' ? 'selected' : '' }}>
                        Hostel
                    </option>
                    <option value="department" {{ old('category') == 'department' ? 'selected' : '' }}>
                        Department
                    </option>
                    <option value="examinations" {{ old('category') == 'examinations' ? 'selected' : '' }}>
                        Controller of Examinations
                    </option>
                    <option value="scholarship" {{ old('category') == 'scholarship' ? 'selected' : '' }}>
                        Scholarship
                    </option>
                </select>
                @error('category')
                    <span class="error-message">{{ $message }}</span>
                @enderror


                                    </div>
                                </div>
                            </div>
                            <div class="single-form-part">
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="description">Description of the Information</label>
                                        <textarea id="description" name="description" class="input-field"
                                                  required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror



                                    </div>



                                </div>
                            </div>

                            <div class="single-form-part">
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <x-turnstile />

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
                        </form>







                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="program-sidebar">

                    <div class="program-info" style="background: var(--rt-secondary) !important;">
                        <h5>Website Admin Details</h5>
                        <p class="text-white">Dr. S. Praveen Kumar</p>
                        <p class="text-white">Website co-ordinator</p>
<br>
                        <p class="text-white">J.S. Raghavan</p>
                        <p class="text-white">Website Developer</p>


                        <div class="contact-info">
                            <h5>Contact:</h5>
                            <a href="mailto:web@egspec.org">web@egspec.org</a>
                            <a href="callto:+919942502245">+91 9942 - 502 - 245</a>
<br>
                            <a href="mailto:praveenkumar@egspec.org">praveenkumar@egspec.org</a>
                            <a href="callto:+919942502245">+91 9942 - 502 - 245</a>
                        </div>
                        <div class="social-info">
                            <h5>Contact Via Whatsapp:</h5>
                            <div class="social-info-link">

                                <a href="#"><i class="fa-brands fa-whatsapp"></i> Dr. S. Praveen Kumar </a>

                            </div>
                        </div>
                    </div>


                </div>
<br>
                <div class="program-sidebar">

                    {{-- <div class="program-info" style="background: #ffffff !important;"> --}}
                <!-- Button to Open Modal -->

                        <x-web-ticket-modal/>


                    {{-- </div> --}}
                </div>

            </div>
        </div>
    </div>
</div>




<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- SunEditor CSS -->
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">

<!-- SunEditor JS -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>

<script>
    // Phone number formatting function
    function formatPhoneNumber(input) {
        let cleaned = input.value.replace(/\D/g, '');
        if (cleaned.length > 10) {
            alert('Please enter only 10 digits');
            cleaned = cleaned.substring(0, 10);
        }
        if (cleaned.length > 5) {
            input.value = cleaned.substring(0, 5) + ' ' + cleaned.substring(5, 10);
        } else {
            input.value = cleaned;
        }
    }

    // Toggle roll number field based on relationship selection
    function toggleRollNumber() {
        const relationship = document.getElementById('relationship').value;
        const rollNumberField = document.getElementById('rollNumberField');
        const rollNumberInput = document.getElementById('roll_number');

        if (relationship === 'student') {
            rollNumberField.style.display = 'block';
            rollNumberInput.required = true;
        } else {
            rollNumberField.style.display = 'none';
            rollNumberInput.required = false;
            rollNumberInput.value = '';
        }
    }

    // Initialize roll number field visibility
    document.addEventListener('DOMContentLoaded', function() {
        toggleRollNumber(); // Initial check
    });

    // Form validation
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        let valid = true;
        const fields = {
            'name': /^[A-Za-z\s]+$/,
            'phone': /^\d{5}\s\d{5}$/,
            'email': /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            'address': /.+/,
            'relationship': /.+/,
            'category': /.+/,
            'description': /.+/
        };

        // Validate each field
        Object.keys(fields).forEach(fieldId => {
            const field = document.getElementById(fieldId);
            const error = document.getElementById(`${fieldId}_error`);

            if (!fields[fieldId].test(field.value.trim())) {
                error.textContent = 'Please fill this field correctly';
                valid = false;
            } else {
                error.textContent = '';
            }
        });

        if (!valid) {
            e.preventDefault();
        }
    });
</script>

@endsection
