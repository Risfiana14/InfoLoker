<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LowonganController;
<<<<<<< Updated upstream
use App\Http\Controllers\job_applicantsController;
=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\RegisController;

>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/login', [AuthController::class, 'indexlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
=======
Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [dashboard::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'indexlogin'])->name('login.post');
Route::post('/login', [AuthController::class, 'login'])->name('login');
>>>>>>> Stashed changes
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'Logout'])-> name('Logout.user');



// Pelatihan
Route::get('pelatihan', [PelatihanController::class, 'index'])->name('pelatihan.index');
Route::get('pelatihan/show/{id}', [PelatihanController::class, 'show'])->name('pelatihan.show');


Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); // Tambah Role
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store'); // Simpan Role
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index'); // Daftar Role
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Edit Role
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update'); // Update Role
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Hapus Role

<<<<<<< Updated upstream
Route::get('/pelamar', [job_applicantsController::class, 'index'])->name('pelamar.index');
Route::get('/pelamar/create', [job_applicantsController::class, 'create'])->name('pelamar.create');
Route::post('/pelamar', [job_applicantsController::class, 'store'])->name('pelamar.store');
Route::get('/pelamar/{id}', [job_applicantsController::class, 'show'])->name('pelamar.show');
Route::get('/{id}', [job_applicantsController::class, 'update'])->name('pelamar.update');
Route::delete('/{id}', [job_applicantsController::class, 'destroy'])->name('pelamar.destroy');
=======
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/job', [JobController::class, 'index'])->name('job.index');
>>>>>>> Stashed changes
