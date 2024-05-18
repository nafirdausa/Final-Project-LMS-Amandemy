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
Route::get('/login', [AuthController::class, 'login'])->name('v_login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');

Route::get('/', function () {
    return view('user_siswa.v_home');
});


Route::get('/course', function () {
    return view('user_siswa.v_course');
});
Route::get('/detail', function () {
    return view('user_siswa.v_detail_course');
});
Route::get('/forum', function () {
    return view('user_siswa.v_course_forum');
});
