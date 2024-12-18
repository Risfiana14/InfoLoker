<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
<<<<<<< HEAD
use App\Http\Controllers\job_applicantsController;
=======
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AuthController;

>>>>>>> db906b5e9dad29d3432dde5b66051fcc50de1cba

Route::get('/', function () {
    return view('layout.main');
});
Route::get('/', function () {
    return view('dashboard');
});

// LOWONGAN
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');

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
<<<<<<< HEAD

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
=======
Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [dashboard::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'indexlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
>>>>>>> db906b5e9dad29d3432dde5b66051fcc50de1cba
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); // Tambah Role
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store'); // Simpan Role
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index'); // Daftar Role
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Edit Role
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update'); // Update Role
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Hapus Role

<<<<<<< HEAD
Route::get('/pelamar', [job_applicantsController::class, 'index'])->name('pelamar.index');
Route::post('/pelamar', [job_applicantsController::class, 'store'])->name('pelamar.store');
Route::get('/pelamar/{id}', [job_applicantsController::class, 'show'])->name('pelamar.show');
Route::post('pelamar/{id}', [job_applicantsController::class, 'update'])->name('pelamar.update');
Route::delete('pelamar/{id}', [job_applicantsController::class, 'destroy'])->name('pelamar.destroy');

=======
>>>>>>> db906b5e9dad29d3432dde5b66051fcc50de1cba
