<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/test-flash', function () {
    return redirect()->back()->with('success', 'Flash message test!');
});

Route::get('/register/success', function () {
    return view('auth.register-success');
})->name('register.success');

Route::get('/profile', function () {
    return view('profile'); // Create a 'profile.blade.php' for the profile page
})->middleware('auth')->name('profile');

Route::get('/home', function () {
    return view('home'); // Ensure this view exists
})->middleware('auth')->name('home'); // Named route for home
