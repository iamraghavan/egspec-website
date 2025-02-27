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
               <!-- WhatsApp Number Input -->
<div class="mb-3">
    <label for="inputWhatsapp" class="form-label">WhatsApp Number <i class="fa-brands fa-whatsapp"></i></label>
    <input type="tel" name="whatsapp_number" class="form-control input_modal" id="inputWhatsapp"
           placeholder="WhatsApp Number without country code" maxlength="10" required>
    <div class="text-danger" id="whatsappError" style="display: none;">Enter a valid 10-digit number.</div>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
    initFormValidation();

    initCourseSelection();
    initModalHandling();
    initFormSubmission();
});

/**
 * Initializes form validation for name, WhatsApp number, and email.
 */
function initFormValidation() {
    const nameInput = document.getElementById("inputName");
    const whatsappInput = document.getElementById("inputWhatsapp");
    const emailInput = document.getElementById("inputEmail");

    if (nameInput) {
        nameInput.addEventListener("input", () => {
            nameInput.value = nameInput.value.replace(/[^a-zA-Z\s]/g, "").toUpperCase();
        });
        nameInput.addEventListener("blur", () => {
            nameInput.value = nameInput.value.toUpperCase();
        });
    }

    if (whatsappInput) {
        whatsappInput.addEventListener("input", () => {
            whatsappInput.value = whatsappInput.value.replace(/\D/g, "").slice(0, 10);
        });
    }

    if (emailInput) {
        emailInput.addEventListener("input", () => {
            emailInput.value = emailInput.value.replace(/[^a-zA-Z0-9@._-]/g, "");
        });
    }
}


/**
 * Populates the course dropdown based on the selected course type.
 */
function initCourseSelection() {
    const courseTypeSelect = document.getElementById("courseType");
    const courseSelect = document.getElementById("course");

    if (!courseTypeSelect || !courseSelect) return;

    courseTypeSelect.addEventListener("change", () => {
        const selectedCourseType = courseTypeSelect.value;
        const courses = @json($coursesByCategory);
        const availableCourses = courses[selectedCourseType] || [];

        courseSelect.innerHTML = '<option value="" disabled selected>Select Course</option>';
        availableCourses.forEach(course => {
            const option = document.createElement("option");
            option.value = course.id;
            option.textContent = course.course_name;
            courseSelect.appendChild(option);
        });
    });
}

/**
 * Handles modal display and disposal.
 */
function initModalHandling() {
    const modalElement = document.getElementById("exampleModal");
    if (!modalElement) return;

    const myModal = new bootstrap.Modal(modalElement);
    myModal.show();

    modalElement.addEventListener("hidden.bs.modal", () => {
        myModal.dispose();
        modalElement.remove();
    });

    @if(session('success') || session('error'))
        setTimeout(() => myModal.hide(), 2000);
    @endif
}

/**
 * Validates and handles form submission.
 */
 function initFormSubmission() {
    const form = document.querySelector("form");
    if (!form) return;

    form.addEventListener("submit", event => {
        const nameInput = document.getElementById("inputName");
        const whatsappInput = document.getElementById("inputWhatsapp");

        if (!nameInput || !whatsappInput) return;

        nameInput.setCustomValidity("");
        whatsappInput.setCustomValidity("");

        if (!/^[a-zA-Z\s]+$/.test(nameInput.value.trim())) {
            nameInput.setCustomValidity("Please enter a valid name.");
        }

        const whatsappValue = whatsappInput.value.trim();
        if (whatsappValue.length !== 10 || !/^[0-9]+$/.test(whatsappValue)) {
            whatsappInput.setCustomValidity("Please enter a valid 10-digit phone number.");
        }



        if (!form.checkValidity()) {
            event.preventDefault();
            alert("Please fix the errors in the form.");
        }
    });
}



  </script>
