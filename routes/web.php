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

Route::get('/inventory-report', function () {
    return view('inventory-report');
});

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/invoices', function () {
    return view('invoices');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/orders-report', function () {
    return view('orders-report');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/organization', function () {
    return view('organization');
});

Route::get('/patient-report', function () {
    return view('patient-report');
});

Route::get('/patient', function () {
    return view('patient');
});

Route::get('/payment-report', function () {
    return view('payment-report');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/prescriptions', function () {
    return view('prescriptions');
});

Route::get('/purchase-order', function () {
    return view('purchase-order');
});

Route::get('/referring-provider-report', function () {
    return view('referring-provider-report');
});

Route::get('/refunds', function () {
    return view('refunds');
});
