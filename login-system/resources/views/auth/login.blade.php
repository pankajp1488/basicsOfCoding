<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://www.shell.com/" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Add some global styling */
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
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: left;
            margin-bottom: 1.5rem;
            color: #333;
        }

        h2 .fa-user {
            margin-right: 1.5rem;
            color: #007bff; /* Customize the icon color */
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #495057;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 1rem;
        }

        .button-container {
            display: flex;
            justify-content: center; /* Centers the button horizontally */
            margin-top: 1.5rem; /* Adds space above the button */
        }

        .btn {
            width: 40%; /* Adjust the button width as needed */
            padding: 0.75rem;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            background-color: #FF0000; /* Login button color */
        }


        .btn-primary {
            background-color: #FF0000;
        }

        .alert {
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        li {
            list-style-type: disc;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1.5rem; /* Space below the logo and text */
        }

        .logo img {
            max-width: 150px; /* Adjust size as needed */
            height: auto;
        }

        .login-text {
            flex: 1;
            font-size: 1.5rem;
            font-family: 'Serif', serif;
        }

        .register {
            display: flex;
            justify-content: space-between; /* Distributes the links evenly */
            margin-top: 1rem; /* Adds some space above the links */
        }

        .register a {
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
        }

        .register a:hover {
            text-decoration: underline;
            color: #0056b3; /* Darker blue for hover */
        }
        
        .link-container {
            display: flex;
            justify-content: space-between; /* Distributes the links evenly */
            margin-bottom: 1rem; /* Adds space below the links */
        }



    </style>
</head>
<body>
    <div class="container">
        
        <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('images/vodafone.png') }}" alt="Logo">
            </div>
            <div class="login-text">
                <h2><i class="fas fa-user"></i>Login</h2>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="register">
                <a href="{{ route('register') }}" class="create-account">Create Account</a>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
            <div class="button-container">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
