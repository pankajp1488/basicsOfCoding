<!-- resources/views/auth/register-success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 8rem;
            border-radius: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            max-height: 300px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #28a745;
            margin-bottom: 3rem;
        }
        .btn {
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background-color: #FF0400;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
        }
        .btn:hover {
            background-color: #FF0400;
        }

        p {
            color: black; /* Change text color to black */
            font-weight: bold; /* Make the text bold */
            margin-bottom: 2.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Successful!</h1>
        <p>Your account has been created successfully.</p>
        <a href="{{ route('login') }}" class="btn">Go to Login</a>
    </div>
</body>
</html>
