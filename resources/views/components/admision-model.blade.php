<!-- Button trigger modal -->
<button type="button" class="d-none" id="myModalTrigger" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Admission {{ date('Y') }} - {{ date('Y') + 1 }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Poster (Right Side) -->
          <div class="col-lg-6">
            <img src="{{ asset('images/egspec_model.webp') }}" class="img-fluid" alt="EGSPEC Admission {{ date('Y') }} - {{ date('Y') + 1 }}">
          </div>
          <!-- Input Form (Left Side) -->
          <div class="col-lg-6 mbo-temp">
            <form action="{{ route('adsubmitForm') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" autocomplete="off" name="m_name" placeholder="Enter your name">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="inputWhatsapp" class="form-label">WhatsApp Number <i class="fa-brands fa-whatsapp"></i></label>
                <input type="tel" name="whatsapp_number" class="form-control" id="inputWhatsapp" placeholder="Enter WhatsApp Number" maxlength="12">
                @error('whatsapp_number')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
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

<!-- Scripts -->
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


