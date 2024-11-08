<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disconnected</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Disconnect page styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #343a40;
        }

        .container-disconnect {
            text-align: center;
        }

        .container-disconnect h1 {
            font-size: 5rem;
            color: #8a4de8;
            /* Adjusted to match the color from the 404 page */
        }

        .container-disconnect p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .btn-reconnect {
            background-color: #8a4de8;
            /* Adjusted to match the color from the 404 page */
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-reconnect:hover {
            background-color: #6b3fc9;
            /* Adjusted hover color */
        }
    </style>
</head>

<body>
    <div class="container-disconnect">
        <h1>Disconnected</h1>
        <p>It seems you've lost your connection. Please check your internet and try reconnecting.</p>
        <a href="#" onclick="location.reload()" class="btn-reconnect">Reconnect</a>
    </div>
</body>

</html>