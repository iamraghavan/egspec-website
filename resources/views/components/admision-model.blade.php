<!-- Button trigger modal -->
<button type="button" class="d-none" id="myModalTrigger" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Adminssion {{ date('Y') }} - {{ date('Y') + 1 }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Poster (Right Side) -->
          <div class="col-lg-6">
            <img src="@blob('/egspec_model.webp')" class="img-fluid" alt="EGSPEC Adminssion {{ date('Y') }} - {{ date('Y') + 1 }}">
          </div>
          <!-- Input Form (Left Side) -->
          <div class="col-lg-6 mbo-temp">
            <form action="{{ route('adsubmitForm') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" autocomplete="off" name="m_name" placeholder="Enter your name" oninput="this.value = this.value.toUpperCase().replace(/[^A-Z\s]/g, '')">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="inputWhatsapp" class="form-label">WhatsApp Number <i class="fa-brands fa-whatsapp"></i></label>
                  <input type="tel" name="whatsapp_number" class="form-control" id="inputWhatsapp" placeholder="Enter WhatsApp Number" maxlength="12" oninput="formatWhatsAppNumber(this)" onclick="if(this.value.length === 0) this.value = '91'">
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
          nameInput.setCustomValidity('');
        }

        var whatsappValue = whatsappInput.value.trim();
        if (whatsappValue.length !== 10 || !/^\d+$/.test(whatsappValue)) {
          whatsappInput.setCustomValidity('');
        }

        if (!form.checkValidity()) {
          event.preventDefault();
          alert('Please fix the errors in the form.');
        }
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



<style>



  /* Apply animation to form-control class */
  .form-control {
    border: 1px solid #ced4da !important; /* Default border color */
    transition: border-color 0.3s ease-in-out !important; /* Smooth transition for border color */
  }

  /* Apply animation to form-control class on focus */
  .form-control:focus {
    border-color: #af005e !important; /* New border color on focus */
  }


    /* Center modal vertically and horizontally */
.modal {
  display: flex !important;
  align-items: center;
  justify-content: center;
}

@media (max-width: 767px) {
    .mbo-temp {
    margin-top: 2rem !important;
  }
  .modal{
    padding: 1rem !important;
  }
}


/* Style modal header */
.modal-header {
  background-color: #007bff;
  color: #fff;
  border-bottom: 1px solid #dee2e6;
}

/* Style modal title */
.modal-title {
  font-weight: bold;
}

/* Style modal body */
.modal-body {
  padding: 20px;
}

/* Style modal close button */
.btn-close {
  color: #fff;
}

/* Style input fields */
.form-control {
  border-radius: 0;
}

/* Style submit button */
.btn-primary {
  border-radius: 0;
  background-color: #28a745;
  border-color: #28a745;
}

/* Hover effect for submit button */
.btn-primary:hover {
  background-color: #218838;
  border-color: #1e7e34;
}

/* Responsive styles */
@media (max-width: 767px) {
  .modal-lg {
    max-width: 100%;
    margin: auto;
  }
  .modal-dialog {
    margin: 0;
  }
  .modal-body {

    padding: 10px;
  }
  .col-lg-6 {
    width: 100%;
  }
}

.modal-header .btn-close {
    padding: .5rem .5rem !important;
    margin: .5rem .5rem .5rem auto !important;

}


/* Style form container */
form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style form labels */
.form-label {
  font-weight: bold;
}

/* Style form input fields */
.form-control {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 0px solid #ccc;
  border-radius: 5px;
  transition: border-color 0.3s ease-in-out;
}



/* Style submit button */
.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

/* Hover effect for submit button */
.btn-primary:hover {
  background-color: #0056b3;
}

/* Style error messages */
.error-message {
  color: red;
  font-size: 14px;
}

</style>
