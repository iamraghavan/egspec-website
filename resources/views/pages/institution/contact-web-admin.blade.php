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
                        <form action="#" style="
    margin: 0px !important;
    width: 100% !important;
    border: none !important;
    max-width: 100%;
">

                            <div class="single-form-part">
                                <h5 class="form-title">Personal Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_id">Staff ERP ID</label>
                                        <input type="text" id="staff_id" name="staff_id" class="input-field" placeholder="Staff ID" required>

                                    </div>
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_name">Staff Name</label>
                                        <input type="text" id="staff_name" name="staff_name" class="input-field" placeholder="Staff Name" required>

                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label class="input-label" for="staff_email">Staff Institution Mail ID</label>
                                        <input type="email" id="staff_email" name="staff_email" class="input-field" placeholder="example@egspec.org" pattern="[a-zA-Z0-9._%+-]+@egspec\.org$" required>

                                    </div>
                                    <div class="single-input-item">
                                        <label for="phone" for="staff_phone">Enter Phone Number</label>
                                        <input type="tel" id="phone_number" name="phone_number" class="input-field" placeholder="123-456-7890" pattern="\d{3}[-]\d{3}[-]\d{4}" required>

                                    </div>
                                </div>


                            </div>
                            <div class="single-form-part">
                                <h5 class="form-title">Academic Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="cname">Collage Name</label>
                                        <input id="cname" type="text" placeholder="EGS Pillay Engineering College" value="EGS Pillay Engineering College" readonly>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="income">Department</label>
                                        <select name="income" id="income" fdprocessedid="t45hw">
                                            <option value="CSE">Computer Science Engineering</option>
                                            <option value="ECE">Electronics and Communication Engineering</option>
                                            <option value="EEE">Electrical and Electronics Engineering</option>
                                            <option value="MECH">Mechanical Engineering</option>
                                            <option value="CIVIL">Civil Engineering</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="work_type">Type of Work</label>
                        <select name="work_type" id="work_type" required>
                            <option value="department_data_update">Department Data Update</option>
                            <option value="clubs_cells_data_update">Clubs & Cells Data Update</option>
                            <option value="activities">Activities</option>
                            <option value="placement">Placement</option>
                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="single-form-part">

                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="data_update">Explain about what data are updated into the website</label>
                        <textarea id="data_update" name="data_update" placeholder="Explain the updates" required></textarea>
                                    </div>

                                </div>

                            </div>
                            <div class="single-form-part">

                                <div class="single-input-item">
                                    <label for="sub">Share assets (Google Drive URLs):</label>
                                    <div id="google_drive_urls">
                                        <div class="url-input-wrapper">
                                            <input type="url" name="google_drive_urls[]" placeholder="Google Drive URL">
                                            <span class="remove-url" onclick="removeUrlInput(this)">&times;</span>
                                        </div>
                                    </div>
                                    <button type="button" class="rts-theme-btn primary with-arrow mt-3" id="add_url">Add another URL </button>
                                </div>

                                <div class="d-flex align-items-center single-checkbox mt--20">
                                    <input type="checkbox" id="exampleCheck1">
                                    <label for="exampleCheck1">By submitting this application, I confirm that all information provided is accurate and complete.</label>
                                </div>
                            </div>
                            <button type="submit" class="rts-theme-btn primary with-arrow" fdprocessedid="ilcu6q">Submit Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
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
    document.getElementById('add_url').addEventListener('click', function() {
        var urlContainer = document.getElementById('google_drive_urls');
        var urlInputs = urlContainer.getElementsByClassName('url-input-wrapper');
        if (urlInputs.length < 4) {
            var newInputWrapper = document.createElement('div');
            newInputWrapper.classList.add('url-input-wrapper');
            newInputWrapper.innerHTML = '<input type="url" name="google_drive_urls[]" placeholder="Google Drive URL" required>' +
                '<span class="remove-url" onclick="removeUrlInput(this)">&times;</span>';
            urlContainer.appendChild(newInputWrapper);
        }
    });

    function removeUrlInput(element) {
        var urlContainer = document.getElementById('google_drive_urls');
        if (urlContainer.children.length > 1) {
            element.parentElement.remove();
        }
    }
</script>

@endsection
