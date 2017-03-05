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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');
Route::resource('companies', 'CompanyController');
Route::post('report', 'AbuserController@generateReport')->name('report.generate');
Route::get('abusers', 'AbuserController@index')->name('abuser.index');
