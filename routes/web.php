<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('Belajar');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/price.html', function () {
    return view('price');
});

Route::post('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'indexregister'])->name('register');
Route::post('/simpanregister', [RegisterController::class, 'register']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [LoginController::class, 'Logout'])-> name('Logout.user');


Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); // Tambah Role
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store'); // Simpan Role
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index'); // Daftar Role
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Edit Role
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update'); // Update Role
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Hapus Role
