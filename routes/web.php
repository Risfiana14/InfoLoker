<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LokerController;

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
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/myprofile', [ProfileController::class, 'index'])->name('myprofile');
    // Route::get('/isiformulir', [ProfileController::class, 'create'])->name('isiformulir');
    // Route::post('/isiformulir', [ProfileController::class, 'store'])->name('isiformulir.store');
    // Route::get('/editformulir', [ProfileController::class, 'edit'])->name('editformulir');
    // Route::post('/editformulir', [ProfileController::class, 'update'])->name('editformulir.update');

    // LAMARAN
    Route::get('loker', [LokerController::class, 'index'])->name('loker.index');
    Route::get('loker/create', [LokerController::class, 'create'])->name('loker.create');
    Route::get('loker/{loker}/edit', [LokerController::class, 'edit'])->name('loker.edit');
    Route::post('loker', [LokerController::class, 'store'])->name('loker.store');
    Route::put('loker/{loker}', [LokerController::class, 'update'])->name('loker.update');
    Route::delete('loker/{loker}', [LokerController::class, 'destroy'])->name('loker.destroy');
    Route::get('/lamaran/show/{loker}', [LamaranController::class, 'show'])->name('lamaran.show');


    Route::get('/lamaran/accept/{loker}', [LamaranController::class, 'accept'])->name('lamaran.accept');
    Route::get('/lamaran/decline/{loker}', [LamaranController::class, 'decline'])->name('lamaran.decline');


    // LOWONGAN
    Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan');

    Route::get('/lowongan/{id}/lamar', [LowonganController::class, 'lamar'])->name('lowongan.lamar');
    Route::post('kirim-lamaran/{id}', [LamaranController::class, 'store'])->name('kirim.lamaran');

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
