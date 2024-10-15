<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst(str_replace('-', ' ', $department)) }} Page Under Construction</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: #222222;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #ffffff;
        }
        .container {
text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            color: #ffffff;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #f3f3f3;
            margin-bottom: 30px;
        }
        .icon {
            font-size: 80px;
            color: #ff0080;
            margin-bottom: 20px;
        }
        .under-construction-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            background-color: #ff0080;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #ffffff;
            color: #00176e;

        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            p {
                font-size: 1rem;
            }

            .container{

                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('assets/images/54687-ai.webp') }}" alt="Under Construction Image" class="under-construction-img">
        <h1>We're Building Something Great!</h1>
        <p>Thank you for your patience. The <strong>HOD's Desk</strong> page is under construction. Please check back soon for updates.</p>
        <a class="rts-theme-btn primary with-arrow" href="{{ url('/') }}">Return to Homepage</a>
        <i class="icon fas fa-spinner"></i>

        <!-- Countdown Timer Display -->
        <div class="countdown">
            <p><span id="countdown"></span></p>
        </div>

        @php
            // Set the target time (for example, the countdown end date)
            $targetTime = now()->addDays(5); // 5 days from now

        @endphp

        <!-- Passing the target time to JavaScript -->
        <script>
            // Convert the target time from PHP to JavaScript
            var targetDate = new Date("{{ $targetTime->format('Y-m-d H:i:s') }}").getTime();

            // Countdown function
            var countdownFunction = setInterval(function() {
                // Get current date and time
                var now = new Date().getTime();

                // Calculate the remaining time between now and the target date
                var distance = targetDate - now;

                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="countdown"
                document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                // If the countdown is finished, display a message
                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                }
            }, 1000); // Update every second
        </script>
    </div>
</body>
</html>
