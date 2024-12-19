<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;

// MIDLEWARE
Route::middleware(['web', 'guest'])->group(function () {
    Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');

    Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {
        return view('layout.main');
    });
    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // LOWONGAN
    Route::get('/lowongan', [LowonganController::class, 'index'])->name('lamongan');

    // Dashboard
    Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');

    // Roles
    

});

Route::apiResource('role', RoleController::class);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/jobs', [JobController::class, 'index'])->name('job.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create');
Route::post('/jobs', [JobController::class, 'store'])->name('job.store');
Route::put('/job/{id}', [JobController::class, 'update'])->name('job.update');  
Route::get('/job/{id}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::delete('/job/{id}', [JobController::class, 'destroy'])->name('job.destroy');







