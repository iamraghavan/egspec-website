<!-- Confetti Component -->
<div id="confetti-container"></div>

<script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const jsConfetti = new JSConfetti();

        // Trigger confetti effect when the page is loaded
        jsConfetti.addConfetti({
            emojis: [ '🌸'],
            confettiColors: [
                '#ff0a54', '#ff477e', '#ff7096', '#ff85a1', '#fbb1bd', '#f9bec7',
            ],
            confettiRadius: 6,
            confettiNumber: 200,
        });

        // Show SweetAlert message after confetti finishes (e.g., 3 seconds delay)
        setTimeout(function() {
            Swal.fire({
                title: 'Welcome!',
                text: 'EGS Pillay Group of Institutions, EGS Pillay Engineering College',
                icon: 'success',
                confirmButtonText: 'Enter',

            });
        }, 5000); // Adjust the delay to match confetti duration
    });
</script>
