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

Route::get('coba', function () {
	return view('coba');

});

Route::get('registrasi', function () {
	return view('register');
});

Route::get('data-pengguna', function () {
	return view('dataPengguna');
});

Route::get('presensi-pengguna', function () {
	return view('presensiPengguna');
});

Route::get('posisi-pengguna', function () {
	return view('posisiPengguna');
});

Route::get('test', function () {
	return view('test');
});

Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');