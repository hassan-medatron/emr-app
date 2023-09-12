<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    return view('logout');
});


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/ar-aging-report', function () {
    return view('ar-aging-report');
});

Route::get('/audit-report', function () {
    return view('audit-report');
});


