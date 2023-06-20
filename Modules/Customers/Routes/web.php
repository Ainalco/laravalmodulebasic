<?php

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

Route::prefix('customers')->group(function() {
    Route::get('/customerlist', 'CustomersController@index')->name('customer.customerlist');
    Route::post('/store', 'CustomersController@store')->name('customer.store');
});
