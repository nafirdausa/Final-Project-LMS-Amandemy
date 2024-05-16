<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('v_home');
});

Route::get('/login', function () {
    return view('v_login');
});
Route::get('/course', function () {
    return view('v_course');
});
Route::get('/detail', function () {
    return view('v_detail_course');
});
Route::get('/forum', function () {
    return view('v_course_forum');
});
