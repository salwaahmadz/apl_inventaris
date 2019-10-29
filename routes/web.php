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

Route::get('/ulogin', function () {
    return view('user.ulogin');
});

// ADMIN CONTROLLER
Route::get('/admin', 'AdminController@index');
Route::get('/formpinjam', 'AdminController@formpinjam');
Route::post('/formpinjam/pinjambarang', 'AdminController@prosespinjam');

Route::get('/{id_peminjaman}/formkembalian', 'AdminController@formkembalian');

Route::get('/daftarbarang', 'AdminController@daftarbarang');
Route::post('/daftarbarang/tambahbarang', 'AdminController@tambah_barang');

Route::get('/daftarjenis', 'AdminController@daftarjenis');
Route::post('daftarjenis/tambahjenis', 'AdminController@tambah_jenis');

Route::get('/daftarruang', 'AdminController@daftarruang');
Route::post('/daftarruang/tambahruang', 'AdminController@tambah_ruang');

Route::get('/daftaruser', 'AdminController@daftaruser');
Route::post('/daftaruser/tambahuser', 'AdminController@tambah_user');
// END CONTROLLER

// USER CONTROLLER
Route::get('/user', 'UserController@index');
Route::get('/formpinjamuser', 'UserController@formpinjamuser');
Route::post('/formpinjamuser/pinjambarang', 'UserController@prosespinjamuser');

Route::get('/uregistrasi', 'UserController@registrasi');
Route::post('registrasi/registrasipost', 'UserController@registrasipost');

Route::post('/loginpost', 'UserController@loginpost');
Route::get('/logout', 'UserController@logoutuser')->name('user.logout');