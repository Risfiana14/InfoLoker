<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/price', function () {
    return view('price');
});

Route::post('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [LoginController::class, 'Logout'])-> name('Logout.user');