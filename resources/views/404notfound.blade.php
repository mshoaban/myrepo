<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .error-container {
            text-align: center;
            margin: 100px auto;
        }

        .error-code {
            font-size: 144px;
        }

        .error-message {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-container">
            <h1 class="error-code">404</h1>
            <p class="error-message">Page Not Found</p>
            <p><a href="{{route('post.index')}}" class="btn btn-primary">Back to Home</a></p>
        </div>
    </div>
</body>
</html>
