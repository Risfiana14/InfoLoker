<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})-> name ('dashboard');

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/price.html', function () {
    return view('price');
});

Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/simpanregister', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');