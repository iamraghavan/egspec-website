<!-- Button to Open Modal -->
<a class="rts-theme-btn primary with-arrow" id="openTicketModal">Check Your Ticket Status
    <span><i class="fa-thin fa-arrow-right"></i></span>
</a>

<!-- Modal Structure -->
<div class="hystmodal" id="ticketStatusModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button class="hystmodal__close" data-hystclose>Close</button>
            {{-- <h2>Enter Your Ticket Details</h2> --}}
            <form id="ticketForm">
                <!-- Institution Name (Default) -->
                <div class="form-group">
                    <label for="institution_name">Institution Name</label>
                    <input type="text" id="institution_name" name="institution_name" class="form-control" value="EGSPEC" readonly>
                </div>
                <!-- Current Year (Default) -->
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" id="year" name="year" class="form-control" readonly>
                </div>
                <!-- Current Month (Default) -->
                <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" id="month" name="month" class="form-control" readonly>
                </div>
                <!-- Department Selection -->
                <div class="form-group">
                    <label for="department">Select Department</label>
                    <select id="odepartment" name="department" class="form-control" required>
                        <option value="">Select Department</option>
                        <option value="MECH">Mechanical Engineering</option>
                        <option value="CIVIL">Civil Engineering</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="ECE">Electronics and Communication Engineering</option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="IT">Information Technology</option>
                        <option value="BME">Biomedical Engineering</option>
                        <option value="CSBS">Computer Science & Business Systems</option>
                        <option value="AIDS">Artificial Intelligence and Data Science</option>
                        <option value="Placement">Placement</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <!-- Last 4 Digits Input -->
                <div class="form-group">
                    <label for="last_four_digits">Enter Last 4 Digits</label>
                    <input type="number" id="last_four_digits" name="last_four_digits" class="form-control" maxlength="4" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- HystModal CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hystmodal/dist/hystmodal.min.css">

<!-- HystModal JS -->
<script src="https://cdn.jsdelivr.net/npm/hystmodal/dist/hystmodal.min.js"></script>

<!-- JavaScript to Handle Modal and Form Submission -->
<script>
    // Initialize modal using HystModal
    const modal = new HystModal({
        linkAttributeName: 'data-hystmodal',
    });

    // Get the current year and month
    const currentYear = new Date().getFullYear();
    const currentMonth = ('0' + (new Date().getMonth() + 1)).slice(-2); // Format month as two digits

    // Set year and month in the form
    document.getElementById('year').value = currentYear;
    document.getElementById('month').value = currentMonth;

    // Open modal when the button is clicked
    document.getElementById('openTicketModal').addEventListener('click', function() {
        modal.open('#ticketStatusModal');
    });

    // Handle form submission
    document.getElementById('ticketForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Collect form data
        const institutionName = document.getElementById('institution_name').value || 'EGSPEC'; // Default to EGSPEC
        const year = document.getElementById('year').value;
        const month = document.getElementById('month').value;
        const department = document.getElementById('odepartment').value;  // Get department value
        const lastFourDigits = document.getElementById('last_four_digits').value;


        const selectElement = document.getElementById("odepartment");
const selectedValue = selectElement.value;

console.log(selectedValue);

        // Debugging: Log the form values
        console.table('Institution Name:', institutionName, 'Year:', year, 'Month:', month, 'Selected Department:', department, 'Last Four Digits:', lastFourDigits);


        // Ensure department is selected and last four digits are exactly 4 digits long
        if (!department) {
            alert('Please select a department.');
            return;
        }

        if (!/^\d{4}$/.test(lastFourDigits)) {
            alert('Please enter exactly 4 digits.');
            return;
        }

        // Generate the department code in uppercase and limit to 4 characters
        const departmentCode = department.substring(0, 4).toUpperCase();

        // Generate the ticket ID using institutionName, year, month, departmentCode, and lastFourDigits
        const ticketId = `${institutionName}/${year}/${month}/${departmentCode}${lastFourDigits}`;

        // Debugging: Log the generated ticket ID
        console.log('Generated Ticket ID:', ticketId);

        // Redirect to the confirmation page with ticket-id as a query parameter
        const confirmationUrl = `/institution/internal/contact/website/admin/confirmation?ticket-id=${ticketId}`;
        window.location.href = confirmationUrl;
    });
</script>

<!-- Optimized CSS for the Form -->
<style>

    #ticketForm{
        padding: 3rem !important;
    }

        #ticketForm,
    #ticketForm input,
    #ticketForm select,
    #ticketForm button,
    #ticketForm label {
        all: unset; /* Remove all styles */
        box-sizing: border-box;
        display: block; /* Ensure they remain visible */
    }

    /* You may add minimal styles for functionality (optional) */
    #ticketForm input,
    #ticketForm select,
    #ticketForm button {
        width: 100%; /* Set width to 100% to ensure full width */
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc; /* You can add basic borders */
    }

    #ticketForm button {
        background-color: #007bff; /* Button background color */
        color: white; /* Button text color */
        cursor: pointer; /* Add a pointer cursor for buttons */
    }
    </style>
