<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\ProfileController;

// MIDLEWARE
Route::middleware(['web', 'guest'])->group(function () {
    Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');

    Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
});

Route::middleware(['web', 'auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
    
    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    // LOWONGAN
    Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan');
    Route::get('/lowongan/lamaran', [LowonganController::class, 'lamar'])->name('lowongan.lamar');
    Route::post('kirim-lamaran', [LamaranController::class, 'store'])->name('kirim.lamaran');

    // Roles
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

    //ORIAN
    Route::get('/orian', function () {
        return view('dashboard');
    });
});
