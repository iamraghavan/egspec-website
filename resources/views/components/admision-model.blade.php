<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Admission Form {{ date('Y') }} - {{ date('Y') + 1 }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Poster (Right Side) -->
          <div class="col-lg-6">
            <picture>
                <source srcset="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" media="(min-width: 1200px)">
                <source srcset="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" media="(min-width: 768px)">
                <source srcset="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" media="(max-width: 767px)">
                <img src="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" class="img-fluid" alt="EGSPEC Admission {{ date('Y') }} - {{ date('Y') + 1 }}">
            </picture>

            {{-- <img src="{{ asset('assets/images/1080x1080_nba_accredited_v1.webp') }}" class="img-fluid" alt="EGSPEC Admission {{ date('Y') }} - {{ date('Y') + 1 }}"> --}}
          </div>
          <!-- Input Form (Left Side) -->
          <div class="col-lg-6 mbo-temp">
            <!-- Form Modal -->
            <form action="{{ route('adsubmitForm') }}" method="POST">
                @csrf
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control input_modal" id="inputName" autocomplete="off" name="m_name" placeholder="Enter your name" required>
                    @error('m_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- WhatsApp Field -->
                <div class="mb-3">
                    <label for="inputWhatsapp" class="form-label">WhatsApp Number <i class="fa-brands fa-whatsapp"></i></label>
                    <input type="tel" name="whatsapp_number" class="form-control input_modal" id="inputWhatsapp" placeholder="Enter WhatsApp Number" maxlength="10" required>
                    @error('whatsapp_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- OTP Verification Section -->
                <div class="mb-3" id="otpSection" style="display: none;">
                    <label for="otp" class="form-label">Enter OTP</label>
                    <input type="text" class="form-control input_modal" id="otp" name="otp" placeholder="Enter OTP" maxlength="6">
                    @error('otp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <button type="button" class="btn modal-button mb-3" id="verifyOtpBtn">Verify OTP</button>
                </div>
            
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control input_modal" id="inputEmail" name="email" placeholder="Enter your email" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="courseType" class="form-label">Course Type</label>
                    <select class="form-control top-select" id="courseType" name="course_type" required>
                        <option value="" disabled selected>Select Course Type</option>
                        <option value="bachelors">Undergraduate</option>
                        <option value="masters">Postgraduate</option>
                    </select>
                </div>
            
                <!-- Course Select -->
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <select class="form-control top-select" id="course" name="course_id" required>
                        <option value="" disabled selected>Select Course</option>
                        <!-- Courses will be dynamically populated based on course type selection -->
                    </select>
                </div>
            
                <!-- Submit Button -->
                <button type="submit" class="btn modal-button mb-3">Submit <i class="fa-sharp fa-regular fa-arrow-right"></i></button>
            
                <!-- Terms & Conditions -->
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="termsCheck">
                        By clicking Submit, I state that I have read and understood the <a href="#">Terms & Conditions</a>
                    </label>
                </div>
            </form>
           
           

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    
</style>
<!-- Scripts -->


<script>
document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("inputName");
    const whatsappInput = document.getElementById("inputWhatsapp");
    const emailInput = document.getElementById("inputEmail");

    nameInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^a-zA-Z\s]/g, "").toUpperCase(); // Allows only letters and spaces
    });

    // Convert to uppercase when focus is lost
    nameInput.addEventListener("blur", function () {
        this.value = this.value.toUpperCase();
    });

    // WhatsApp Number: Allow only 10 digits, no symbols or alphabets
    whatsappInput.addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "").slice(0, 10); // Allow only numbers and limit to 10 digits
    });

    // Email: Allow only valid email characters
    emailInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^a-zA-Z0-9@._-]/g, ""); // Allow only valid email characters
    });
});
</script>



<!-- Script to Handle OTP and Dynamic Course Selection -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      var otpSection = document.getElementById('otpSection');
      var verifyOtpBtn = document.getElementById('verifyOtpBtn');
      var courseTypeSelect = document.getElementById('courseType');
      var courseSelect = document.getElementById('course');

      // Handle OTP Section visibility
      document.getElementById('inputWhatsapp').addEventListener('blur', function() {
        // Trigger OTP input after user enters WhatsApp number
        otpSection.style.display = 'block';
      });

      // Handle OTP Verification
      verifyOtpBtn.addEventListener('click', function() {
        var otp = document.getElementById('otp').value;
        // Here you can send the OTP to your backend for verification
        alert('Verifying OTP: ' + otp); // Example alert, replace with actual OTP logic
        otpSection.style.display = 'none'; // Hide OTP section after verification
      });

      // Populate Courses based on Course Type
      courseTypeSelect.addEventListener('change', function() {
        var selectedCourseType = courseTypeSelect.value;
        var courses = @json($coursesByCategory); // Pass courses by category from controller
        var availableCourses = courses[selectedCourseType] || [];

        courseSelect.innerHTML = '<option value="" disabled selected>Select Course</option>';
        availableCourses.forEach(function(course) {
          var option = document.createElement('option');
          option.value = course.id;
          option.textContent = course.course_name;
          courseSelect.appendChild(option);
        });
      });
    });
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();

    var modalElement = document.getElementById('exampleModal');
    modalElement.addEventListener('hidden.bs.modal', function() {
      myModal.dispose();
      modalElement.parentNode.removeChild(modalElement);
    });

    @if(session('success') || session('error'))
    setTimeout(function() {
      myModal.hide();
    }, 2000);
    @endif

    var form = document.querySelector('form');
    var nameInput = document.getElementById('inputName');
    var whatsappInput = document.getElementById('inputWhatsapp');

    form.addEventListener('submit', function(event) {
      nameInput.setCustomValidity('');
      whatsappInput.setCustomValidity('');

      if (!/^[a-zA-Z\s]+$/.test(nameInput.value.trim())) {
        nameInput.setCustomValidity('Please enter a valid name');
      }

      var whatsappValue = whatsappInput.value.trim();
      if (whatsappValue.length !== 10 || !/^\d+$/.test(whatsappValue)) {
        whatsappInput.setCustomValidity('Please enter a valid 10-digit phone number');
      }

      if (!form.checkValidity()) {
        event.preventDefault();
        alert('Please fix the errors in the form.');
      }
    });
  });
</script>
