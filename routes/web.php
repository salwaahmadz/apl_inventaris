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
    return view('login');
});
// UNIVERSAL
// END UNIVERSAL

// ADMIN CONTROLLER
Route::get('/admin', 'AdminController@index');
Route::get('/formpinjam', 'AdminController@formpinjam');
// END CONTROLLER

// USER CONTROLLER
Route::get('user', 'UserController@index');
Route::get('/formpinjamuser', 'UserController@formpinjamuser');