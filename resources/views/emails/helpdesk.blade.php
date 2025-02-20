<!DOCTYPE html>
<html>
<head>
    <title>Helpdesk Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #50b3a2;
            color: #ffffff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        h1, h2, h3 {
            margin: 0;
            padding: 0;
        }
        .details {
            background: #ffffff;
            padding: 30px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border-left: #e8491d 4px solid;
        }
        .unsubscribe {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="container">
                <h1>Helpdesk Form Submission</h1>
            </div>
        </header>
        <div class="details">
            <p>The following details were submitted:</p>
            <ul>
                <li><strong>Name:</strong> {{ $data[0]['name'] }}</li>
                <li><strong>Phone:</strong> {{ $data[0]['phone'] }}</li>
                <li><strong>Email:</strong> {{ $data[0]['email'] }}</li>
                <li><strong>Address:</strong> {{ $data[0]['address'] }}</li>
                <li><strong>Relationship:</strong> {{ $data[0]['relationship'] }}</li>
                <li><strong>Roll Number:</strong> {{ $data[0]['roll_number'] }}</li>
                <li><strong>Category:</strong> {{ $data[0]['category'] }}</li>
                <li><strong>Description:</strong> {{ $data[0]['description'] }}</li>
            </ul>
            <p class="unsubscribe">
                If you wish to unsubscribe from receiving these emails, please click <a href="{{ $unsubscribe_link }}">here</a>.
            </p>
        </div>
    </div>
</body>
</html>
