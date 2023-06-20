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

Route::prefix('dashboard')->group(function() {
    Route::get('/', 'DashboardController@index')->name("dashboard")->middleware(['auth']);
	//Route::get('dashboard/login', 'DashboardController@auth');
});
Route::get('/main', 'DashboardController@mainlayout')->name('main');
Route::get('/logout', 'DashboardController@logout')->name('logout');
Route::get('/login', 'DashboardController@auth')->name('login');
Route::post('/auth', 'DashboardController@loginvalid')->name("checklogin");
