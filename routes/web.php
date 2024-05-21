<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/dashboard', [AuthController::class, 'guruDashboard'])->name('user_guru.home');
});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa/dashboard', [AuthController::class, 'siswaDashboard'])->name('user_siswa.home');
});


// Dashboard Siswa
Route::get('/course', function () {
    return view('user_siswa.course');
});
Route::get('/detail', function () {
    return view('user_siswa.detail_course');
});
Route::get('/forum', function () {
    return view('user_siswa.course_forum');
});
