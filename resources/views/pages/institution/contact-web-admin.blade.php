@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => '',
    'value_2' => '',
    'value_3' => '',
    'page_title' => ''
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
                                        <span class="error-message" id="staff_id_error"></span>
                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_name">Staff Name</label>
                                        <input type="text" id="staff_name" name="staff_name" class="input-field" placeholder="Staff Name" required pattern="[A-Za-z\s]+" title="Please enter alphabets only" value="{{ old('staff_name') }}">
                                        <span class="error-message" id="staff_name_error"></span>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_email">Staff Institution Mail ID</label>
                                        <input type="email" id="staff_email" name="staff_email" class="input-field" placeholder="example@egspec.org" pattern="[a-zA-Z0-9._%+-]+@egspec\.org$" required title="Please enter a valid egspec.org email" value="{{ old('staff_email') }}">
                                        <span class="error-message" id="staff_email_error"></span>
                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_phone">Enter Phone Number</label>
                                        <input type="tel" id="staff_phone" name="staff_phone" class="input-field" placeholder="123-456-7890" pattern="\d{3}[-]\d{3}[-]\d{4}" required title="Please enter a valid phone number format: 123-456-7890" value="{{ old('staff_phone') }}">
                                        <span class="error-message" id="staff_phone_error"></span>
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
                                            <option value="MECH">Mechanical Engineering</option>
                                            <option value="CIVIL">Civil Engineering</option>
                                            <option value="EEE">Electrical and Electronics Engineering</option>
                                            <option value="ECE">Electronics and Communication Engineering</option>
                                            <option value="CSE">Computer Science and Engineering</option>
                                            <option value="IT">Information Technology</option>
                                            <option value="BME">Biomedical Engineering</option>
                                            <option value="CSBS">Computer Science & Business Systems Engineering</option>
                                            <option value="AIDS">Artificial Intelligence and Data Science</option>
                                            <option value="Placement">Placement</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <span class="error-message" id="department_error"></span>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="work_type">Type of Work</label>
                                        <select name="work_type" id="work_type" required>
                                            <option value="">Select Type of Work</option>
                                            <option value="department_data_update">Department Data Update</option>
                                            <option value="clubs_cells_data_update">Clubs & Cells Data Update</option>
                                            <option value="activities">Activities</option>
                                            <option value="placement">Placement</option>
                                        </select>
                                        <span class="error-message" id="work_type_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-form-part">
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="data_update">Explain about what data are updated into the website</label>
                                        <textarea id="data_update" name="data_update" placeholder="Explain the updates" required>{{ old('data_update') }}</textarea>
                                        <span class="error-message" id="data_update_error"></span>
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
                                    <span class="error-message" id="confirmation_error"></span>
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
            </div>
        </div>
    </div>
</div>

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

<script>
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        var valid = true;

        // Clear previous error messages
        document.querySelectorAll('.error-message').forEach(function (el) {
            el.textContent = '';
        });

        // Validate Staff ID
        var staffId = document.getElementById('staff_id');
        var staffIdError = document.getElementById('staff_id_error');
        if (!staffId.value.match(/^[A-Za-z0-9]+$/)) {
            staffIdError.textContent = 'Please enter alphanumeric characters only.';
            valid = false;
        }

        // Validate Staff Name
        var staffName = document.getElementById('staff_name');
        var staffNameError = document.getElementById('staff_name_error');
        if (!staffName.value.match(/^[A-Za-z\s]+$/)) {
            staffNameError.textContent = 'Please enter alphabets only.';
            valid = false;
        }

        // Validate Staff Email
        var staffEmail = document.getElementById('staff_email');
        var staffEmailError = document.getElementById('staff_email_error');
        if (!staffEmail.value.match(/^[a-zA-Z0-9._%+-]+@egspec\.org$/)) {
            staffEmailError.textContent = 'Please enter a valid egspec.org email.';
            valid = false;
        }

        // Validate Phone Number
        var staffPhone = document.getElementById('staff_phone');
        var staffPhoneError = document.getElementById('staff_phone_error');
        if (!staffPhone.value.match(/^\d{3}-\d{3}-\d{4}$/)) {
            staffPhoneError.textContent = 'Please enter a valid phone number format: 123-456-7890.';
            valid = false;
        }

        // Validate Department
        var department = document.getElementById('department');
        var departmentError = document.getElementById('department_error');
        if (department.value === '') {
            departmentError.textContent = 'Please select a department.';
            valid = false;
        }

        // Validate Work Type
        var workType = document.getElementById('work_type');
        var workTypeError = document.getElementById('work_type_error');
        if (workType.value === '') {
            workTypeError.textContent = 'Please select the type of work.';
            valid = false;
        }

        // Validate Data Update
        var dataUpdate = document.getElementById('data_update');
        var dataUpdateError = document.getElementById('data_update_error');
        if (dataUpdate.value.trim() === '') {
            dataUpdateError.textContent = 'Please explain what data has been updated.';
            valid = false;
        }

        // Validate Confirmation Checkbox
        var confirmation = document.getElementById('confirmation');
        var confirmationError = document.getElementById('confirmation_error');
        if (!confirmation.checked) {
            confirmationError.textContent = 'You must confirm that all information is accurate and complete.';
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    // Add URL input fields dynamically
    document.getElementById('add_url').addEventListener('click', function () {
        var urlInputWrapper = document.createElement('div');
        urlInputWrapper.classList.add('url-input-wrapper');
        urlInputWrapper.innerHTML = '<input type="url" name="google_drive_urls[]" placeholder="Google Drive URL" required> <span class="remove-url" onclick="removeUrlInput(this)">&times;</span>';
        document.getElementById('google_drive_urls').appendChild(urlInputWrapper);
    });

    function removeUrlInput(element) {
        element.parentElement.remove();
    }
</script>

@endsection
