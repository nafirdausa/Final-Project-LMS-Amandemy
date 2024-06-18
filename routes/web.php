<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\ReplyController;

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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');

// Login with Google
Route::get('login/google', [AuthController::class, 'loginGoogle'])->name('login_google');
Route::get('login/google/callback', [AuthController::class, 'loginGoogleCallback'])->name('callback_google');

// Login with Facebook
Route::get('login/facebook', [AuthController::class, 'loginFacebook'])->name('login_facebook');
Route::get('login/facebook/callback', [AuthController::class, 'loginFacebookCallback'])->name('callback_facebook');


// Dashboard Guru
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru',[GuruController::class, 'guruDashboard'])->name('user_guru.home');
    Route::get('/guru-kelas',[GuruController::class, 'kelas'])->name('dashboard.guru.kelas');
    Route::get('/guru-tugas',[GuruController::class, 'tugas'])->name('dashboard.guru.tugas');
    Route::get('/guru-ujian',[GuruController::class, 'ujian'])->name('dashboard.guru.ujian');
    Route::get('/guru-raport',[GuruController::class, 'raport'])->name('dashboard.guru.raport');
    Route::get('/add-kelas',[GuruController::class, 'showFormKelas'])->name('dashboard.guru.form_kelas');
    Route::post('/add-kelas', [GuruController::class, 'addKelas'])->name('dashboard.guru.add_kelas');
    Route::get('/add-raport',[GuruController::class, 'addRaport'])->name('dashboard.guru.add_raport');
    Route::get('/add-tugas',[GuruController::class, 'addTugas'])->name('dashboard.guru.add_tugas');
    Route::post('/submit-tugas', [GuruController::class, 'submitTugas'])->name('submit_tugas');
    Route::get('/tugas/{tugas}/penilaian', [GuruController::class, 'showPenilaianForm'])->name('tugas.penilaian');
    Route::post('/tugas/{tugas}/penilaian', [GuruController::class, 'penilaian'])->name('tugas.proses_penilaian');
    Route::get('/add-ujian',[GuruController::class, 'addUjian'])->name('dashboard.guru.add_ujian');
    Route::post('/submit-ujian', [GuruController::class, 'submitUjian'])->name('submit_ujian');
    Route::get('/ujian/{ujian}/penilaian', [GuruController::class, 'showPenilaianUjian'])->name('ujian.penilaian');
    Route::post('/ujian/{ujian}/penilaian', [GuruController::class, 'penilaianUjian'])->name('ujian.proses_penilaian');
});

// Dashboard Siswa
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa', [SiswaController::class, 'siswaDashboard'])->name('user_siswa.home');
    Route::get('/course', [SiswaController::class, 'showCourcePage'])->name('dashboard.siswa.course');
    Route::get('/hero', [SiswaController::class, 'showHeroPage'])->name('dashboard.siswa.hero');
    Route::get('/detail', [SiswaController::class, 'showDetailCourcePage'])->name('dashboard.siswa.detail_course');
    Route::get('/forum', [SiswaController::class, 'showForumPage'])->name('dashboard.siswa.forum');
    Route::get('/report', [SiswaController::class, 'showReportPage'])->name('dashboard.siswa.report');
    Route::get('/portofolio', [SiswaController::class, 'showPortofolioPage'])->name('dashboard.siswa.portofolio');
    Route::post('/portofolio/upload', [SiswaController::class, 'uploadPortofolio'])->name('dashboard.siswa.uploadPortofolio');
    Route::get('/quiz', [SiswaController::class, 'showQuizPage'])->name('dashboard.siswa.quiz');
    Route::get('/add-quiz', [SiswaController::class, 'showAddQuizPage'])->name('dashboard.siswa.quiz-add');
    Route::get('/ujian', [SiswaController::class, 'showUjianPage'])->name('dashboard.siswa.ujian');
    Route::get('/ujian-quiz', [SiswaController::class, 'showAddUjianPage'])->name('dashboard.siswa.ujian-add');
    Route::post('/submit-jawaban/tugas/{tugas_id}', [SiswaController::class, 'submitJawabanTugas'])->name('submit_jawaban_tugas');
    Route::post('/submit-jawaban/ujian/{ujian_id}', [SiswaController::class, 'submitJawabanUjian'])->name('submit_jawaban_ujian');
});

//Forum Diskusi;

Route::middleware(['auth', 'role:siswa'])->group(function () {
Route::get('/forum', [DiscussionController::class, 'index'])->name('dashboard.siswa.forum');
});

Route::resource('discussions', DiscussionController::class);
Route::post('discussions/{discussion}/replies', [ReplyController::class, 'store'])->name('replies.store');