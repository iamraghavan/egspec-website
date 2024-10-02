@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Contact',
    'value_3' => 'Web Admin',
    'page_title' => 'Contact Web Admin / Webmaster'
])



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
                                        <label class="input-label" for="staff_id">Staff ERP ID</label>
                                        <input type="text" id="staff_id" name="staff_id" class="input-field" placeholder="Staff ID" required pattern="[A-Za-z0-9]+" title="Please enter alphanumeric characters only" value="{{ old('staff_id') }}">
                                        @error('staff_id')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_name">Staff Name</label>
                                        <input type="text" id="staff_name" name="staff_name" class="input-field" placeholder="Staff Name" required pattern="[A-Za-z\s]+" title="Please enter only letters and spaces" value="{{ old('staff_name') }}" oninput="this.value = this.value.toUpperCase()">
                                        @error('staff_name')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_email">Staff Institution Mail ID</label>
                                        <input type="email" id="staff_email" name="staff_email" class="input-field" placeholder="example@egspec.org" pattern="[a-zA-Z0-9._%+-]+@egspec\.org$" required title="Please enter a valid egspec.org email" value="{{ old('staff_email') }}">
                                        @error('staff_email')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_phone">Enter Phone Number</label>
                                        <input type="text" id="staff_phone" name="staff_phone" class="input-field" placeholder="12345 67890"
                                        pattern="\d{5}\s\d{5}" title="Please enter a phone number in the without Country Code (+91)"
                                        required value="{{ old('staff_phone') }}" oninput="formatPhoneNumber(this)" maxlength="11">

                                        @error('staff_phone')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="single-form-part">
                                <h5 class="form-title">Academic Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="cname">College Name</label>
                                        <input id="cname" type="text" placeholder="EGS Pillay Engineering College" value="EGS Pillay Engineering College" readonly>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="department">Department</label>
                                        <select name="department" id="department" required>
                                            <option value="">Select Department</option>
                                            <option value="MECH" {{ old('department') == 'MECH' ? 'selected' : '' }}>Mechanical Engineering</option>
                                            <option value="CIVIL" {{ old('department') == 'CIVIL' ? 'selected' : '' }}>Civil Engineering</option>
                                            <option value="EEE" {{ old('department') == 'EEE' ? 'selected' : '' }}>Electrical and Electronics Engineering</option>
                                            <option value="ECE" {{ old('department') == 'ECE' ? 'selected' : '' }}>Electronics and Communication Engineering</option>
                                            <option value="CSE" {{ old('department') == 'CSE' ? 'selected' : '' }}>Computer Science and Engineering</option>
                                            <option value="IT" {{ old('department') == 'IT' ? 'selected' : '' }}>Information Technology</option>
                                            <option value="BME" {{ old('department') == 'BME' ? 'selected' : '' }}>Biomedical Engineering</option>
                                            <option value="CSBS" {{ old('department') == 'CSBS' ? 'selected' : '' }}>Computer Science & Business Systems Engineering</option>
                                            <option value="AIDS" {{ old('department') == 'AIDS' ? 'selected' : '' }}>Artificial Intelligence and Data Science</option>
                                            <option value="Placement" {{ old('department') == 'Placement' ? 'selected' : '' }}>Placement</option>
                                            <option value="Others" {{ old('department') == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                        @error('department')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="work_type">Type of Work</label>
                                        <select name="work_type" id="work_type" required>
                                            <option value="">Select Type of Work</option>
                                            <option value="department_data_update" {{ old('work_type') == 'department_data_update' ? 'selected' : '' }}>Department Data Update</option>
                                            <option value="clubs_cells_data_update" {{ old('work_type') == 'clubs_cells_data_update' ? 'selected' : '' }}>Clubs & Cells Data Update</option>
                                            <option value="activities" {{ old('work_type') == 'activities' ? 'selected' : '' }}>Activities</option>
                                            <option value="placement" {{ old('work_type') == 'placement' ? 'selected' : '' }}>Placement</option>
                                        </select>
                                        @error('work_type')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="single-form-part">
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="data_update">Explain what data are updated into the website</label>
                                        <textarea id="data_update" name="data_update" required>{{ old('data_update') }}</textarea>
                                        @error('data_update')
                                        <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>



                                </div>
                            </div>
                            <div class="single-form-part">
                                <div class="single-input-item">
                                    <label for="sub">Share assets (Google Drive URLs):</label>
                                    <div id="google_drive_urls">
                                        <div class="url-input-wrapper">
                                            <input type="url" name="google_drive_urls[]" placeholder="Google Drive URL" required>
                                            <span class="remove-url" onclick="removeUrlInput(this)">&times;</span>
                                        </div>
                                    </div>
                                    <button type="button" class="rts-theme-btn primary with-arrow mt-3" id="add_url">Add another URL</button>
                                </div>
                                <div class="d-flex align-items-center single-checkbox mt--20">
                                    <input type="checkbox" id="confirmation" name="confirmation" required>
                                    <label for="confirmation">By submitting this application, I confirm that all information provided is accurate and complete.</label>
                                    @error('confirmation')
                                    <span class="error-message">{{ $message }}</span>
                                    @enderror
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




{{-- New Brach Update --}}
{{-- Hello New Branch --}}
<style>

.url-input-wrapper {
  display: flex;
  align-items: center;
  margin-top: 10px;
}
.url-input-wrapper input {
  flex: 1;
}
.remove-url {
  margin-left: 10px;
  cursor: pointer;
  color: #ff0000;
  font-size: 20px;
  font-weight: bold;
}
</style>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- SunEditor CSS -->
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">

<!-- SunEditor JS -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>

<script>
    // Function to add a new Google Drive URL input
    function addUrlInput() {
        const wrapper = document.createElement('div');
        wrapper.classList.add('url-input-wrapper');
        wrapper.innerHTML = `
            <input type="url" name="google_drive_urls[]" placeholder="Google Drive URL" required>
            <span class="remove-url" onclick="removeUrlInput(this)">&times;</span>
        `;
        document.getElementById('google_drive_urls').appendChild(wrapper);
    }

    // Function to remove a Google Drive URL input
    function removeUrlInput(element) {
        element.parentElement.remove();
    }

    // Define the formatPhoneNumber function before using it
    function formatPhoneNumber(input) {
    // Remove all non-digit characters
    let cleaned = input.value.replace(/\D/g, '');

    // If more than 10 digits, show an alert and stop processing
    if (cleaned.length > 10) {
        alert('Please enter only 10 digits in the format: 12345 67890');
        cleaned = cleaned.substring(0, 10); // Restrict to 10 digits
    }

    // Format the input as '12345 67890' if 5 or more digits
    if (cleaned.length > 5) {
        input.value = cleaned.substring(0, 5) + ' ' + cleaned.substring(5, 10);
    } else {
        input.value = cleaned; // Just display as it is if less than 5 digits
    }
}


    // Form validation functions
    function validateForm(e) {
        let valid = true;
        clearErrorMessages();

        valid &= validateField('staff_id', /^[A-Za-z0-9]+$/, 'Please enter alphanumeric characters only.');
        valid &= validateField('staff_name', /^[A-Za-z\s]+$/, 'Please enter alphabets only.');
        valid &= validateField('staff_email', /^[a-zA-Z0-9._%+-]+@egspec\.org$/, 'Please enter a valid egspec.org email.');
        valid &= validateField('staff_phone', /^\d{5}\s\d{5}$/, 'Please enter a valid phone number format: 12345 67890.');
        valid &= validateSelect('department', 'Please select a department.');
        valid &= validateSelect('work_type', 'Please select the type of work.');
        valid &= validateTextArea('data_update', 'Please explain what data has been updated.');
        valid &= validateCheckbox('confirmation', 'You must confirm that all information is accurate and complete.');

        if (!valid) {
            e.preventDefault();
        }
    }

    function clearErrorMessages() {
        document.querySelectorAll('.error-message').forEach(function(el) {
            el.textContent = '';
        });
    }

    function validateField(id, regex, errorMessage) {
        const field = document.getElementById(id);
        const error = document.getElementById(`${id}_error`);
        if (!regex.test(field.value)) {
            error.textContent = errorMessage;
            return false;
        }
        return true;
    }

    function validateSelect(id, errorMessage) {
        const field = document.getElementById(id);
        const error = document.getElementById(`${id}_error`);
        if (field.value === '') {
            error.textContent = errorMessage;
            return false;
        }
        return true;
    }

    function validateTextArea(id, errorMessage) {
        const field = document.getElementById(id);
        const error = document.getElementById(`${id}_error`);
        const content = SUNEDITOR.getInstanceById(id).getContents();
        if (content.trim() === '') {
            error.textContent = errorMessage;
            return false;
        }
        return true;
    }

    function validateCheckbox(id, errorMessage) {
        const field = document.getElementById(id);
        const error = document.getElementById(`${id}_error`);
        if (!field.checked) {
            error.textContent = errorMessage;
            return false;
        }
        return true;
    }

    // Initialize SunEditor and set up event listeners
    document.addEventListener('DOMContentLoaded', function() {
        const editor = SUNEDITOR.create('data_update', {
            showPathLabel: false,
            charCounter: true,
            maxCharCount: 720,
            width: 'auto',
            maxWidth: '700px',
            height: 400,
            minHeight: '100px',
            maxHeight: '250px',
            buttonList: [
                ['undo', 'redo', 'font', 'fontSize', 'formatBlock'],
                ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'removeFormat'],
                '/', // Line break
                ['fontColor', 'hiliteColor', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'table'],
                ['link', 'image', 'video', 'fullScreen', 'preview', 'print', 'save']
            ],
            callBackSave: function(contents, isChanged) {
                console.log(contents);
            }
        });

        // Listen to input events on the editor
        editor.onChange = function(contents, core) {
            // Update the underlying textarea
            editor.save();
            console.log(document.getElementById("data_update").value);
        };

        // Attach form submission handler
        document.getElementById('contactForm').addEventListener('submit', validateForm);
    });
</script>

@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
@endsection
