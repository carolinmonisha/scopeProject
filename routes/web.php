<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\contactcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/About', function () {
    return view('about');
});
Route::get('/Registration', function () {
    return view('registration');
});


Route::get('/Contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/Student', function () {
    return view('student');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/password', function () {
    return view('password');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/form', function () {
    return view('form');
});
Route::get('/changepassword', function () {
    
    return view('password');
});

//hello 
Route::post('/Registration',[registercontroller::class,'submit']);
Route::post('/login',[registercontroller::class,'login']);
Route::post('/Contact',[contactcontroller::class,'contact']);
Route::post('/changepassword',[contactcontroller::class,'changepass']);
