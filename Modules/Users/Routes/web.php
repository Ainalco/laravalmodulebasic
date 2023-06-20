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

Route::prefix('users')->group(function() {
    Route::get('/userlist', 'UsersController@index')->name('user.userlist');
    Route::post('/store', 'UsersController@store')->name('user.store');
    Route::get('/adduser', 'UsersController@create')->name('user.adduser');
    Route::get('/edituser/{id}', 'UsersController@edit')->name('user.edituser');
    Route::put('/update/{id}', 'UsersController@update')->name('user.update');
});
