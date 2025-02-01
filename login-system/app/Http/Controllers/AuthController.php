<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = 'patilpankaj40009@gmail.com';
        $password = '1234567890';

        // Attempt to log the user in
        if ($request->email === $email && $request->password === $password) {
            // Log the user in (you may want to create a session or similar)
            Auth::loginUsingId(1); // Assuming user ID 1 is associated with the hardcoded credentials
    
            return redirect()->intended('/home'); // Redirect to home page
        }
    
        // If the credentials do not match, redirect back with an error
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout the user
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

