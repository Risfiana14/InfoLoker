<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\RoleController;
<<<<<<< HEAD
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AuthController;

>>>>>>> b443757fed070fe26031f61effbd989595a74d5f
=======
use App\Http\Controllers\job_applicantsController;
>>>>>>> main

Route::get('/', function () {
    return view('layout.main');
});
// Route::get('/', function () {
//     return view('dashboard');
// });

// LOWONGAN
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
<<<<<<< HEAD

Route::post('/logout', [AuthController::class, 'Logout'])-> name('Logout.user');
=======




Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); // Tambah Role
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store'); // Simpan Role
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index'); // Daftar Role
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Edit Role
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update'); // Update Role
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Hapus Role

<<<<<<< HEAD
>>>>>>> b443757fed070fe26031f61effbd989595a74d5f
=======
Route::get('/', [job_applicantsController::class, 'index'])->name('pelamar.index');
Route::get('/create', [job_applicantsController::class, 'create'])->name('pelamar.create');
Route::post('/', [job_applicantsController::class, 'store'])->name('pelamar.store');
Route::get('/{id}', [job_applicantsController::class, 'show'])->name('pelamar.show');
Route::get('/{id}/edit', [job_applicantsController::class, 'edit'])->name('pelamar.edit');
Route::patch('/{id}', [job_applicantsController::class, 'update'])->name('pelamar.update');
Route::delete('/{id}', [job_applicantsController::class, 'destroy'])->name('pelamar.destroy');

>>>>>>> main
