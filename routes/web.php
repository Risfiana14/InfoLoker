<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [dashboard::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'indexlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'Logout'])-> name('Logout.user');