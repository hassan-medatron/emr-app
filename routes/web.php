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

Route::get('/authorizations', function () {
    return view('authorizations');
});

Route::get('/billing-report', function () {
    return view('billing-report');
});

Route::get('/billing', function () {
    return view('billing');
});

Route::get('/cmns', function () {
    return view('cmns');
});

Route::get('/denials', function () {
    return view('denials');
});

Route::get('/deposits', function () {
    return view('deposits');
});

Route::get('/eob-era', function () {
    return view('eob-era');
});
