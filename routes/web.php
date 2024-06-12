<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', [HeroController::class, 'heroPage'])->name('hero');

// Authentication
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');

Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/dashboard', [AuthController::class, 'guruDashboard'])->name('user_guru.home');
});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa/dashboard', [AuthController::class, 'siswaDashboard'])->name('user_siswa.home');
});


// Dashboard Siswa
Route::get('/course', [SiswaController::class, 'showCourcePage'])->name('dashboard.siswa.course');
Route::get('/hero', [SiswaController::class, 'showHeroPage'])->name('dashboard.siswa.hero');
Route::get('/detail', [SiswaController::class, 'showDetailCourcePage'])->name('dashboard.siswa.detail_course');
Route::get('/forum', [SiswaController::class, 'showForumPage'])->name('dashboard.siswa.forum');
Route::get('/report', [SiswaController::class, 'showReportPage'])->name('dashboard.siswa.report');
Route::get('/portofolio', [SiswaController::class, 'showPortofolioPage'])->name('dashboard.siswa.portofolio');
Route::get('/quiz', [SiswaController::class, 'showQuizPage'])->name('dashboard.siswa.quiz');
Route::get('/add-quiz', [SiswaController::class, 'showAddQuizPage'])->name('dashboard.siswa.quiz-add');

// Dashboard Guru
Route::get('/guru',[GuruController::class, 'dashboard'])->name('dashboard.guru.home');