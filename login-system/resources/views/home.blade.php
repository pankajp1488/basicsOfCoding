<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .greeting {
            font-size: 1.5rem;
            color: #333;
        }
        .profile-container {
            text-align: center; /* Center the icon and link */
        }
        .profile-icon {
            font-size: 2rem; /* Adjust size as needed */
            color: #fff; /* Icon color */
            background-color: red; /* Background color */
            border-radius: 50%; /* Circular shape */
            width: 50px; /* Adjust size as needed */
            height: 50px; /* Adjust size as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px; /* Space between icon and link */
        }
        .profile {
            font-size: 1rem;
            color: #007bff; /* Customize link color */
            text-decoration: none;
            display: block; /* Ensures the link is block-level */
        }
        .profile:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="greeting">Hi Pankaj</div>
        <div class="profile-container">
            <div class="profile-icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="{{ route('profile') }}" class="profile">My Profile</a>
        </div>
    </div>

    <div class="content">
        <h2>Welcome to the Home Page!</h2>
        <p>This is where you can find your dashboard and other features.</p>
    </div>
</body>
</html>
