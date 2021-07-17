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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa' , 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa/create' , 'MahasiswaController@create')->name('mahasiswa.create');
Route::Post('mahasiswa/simpan' , 'MahasiswaController@store')->name('mahasiswa.simpan');
Route::get('mahasiswa-edit/{id}' , 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::Post('mahasiswa-update/{id}' , 'MahasiswaController@update')->name('mahasiswa-update');
Route::get('mahasiswa-hapus/{id}' , 'MahasiswaController@destroy')->name('mahasiswa.hapus');

//matkul this rute

Route::get('matkul' , 'MatkulController@index')->name('matkul');
Route::get('matkul-create' , 'MatkulController@create')->name('matkul-create');
Route::Post('matkul-simpan' , 'MatkulController@store')->name('matkul-simpan');
Route::get('matkul-edit/{id}' , 'MatkulController@edit')->name('matkul-edit');
Route::post('matkul-update/{id}' , 'MatkulController@ubah')->name('matkul-update');
Route::get('matkul-hapus/{id}' , 'MatkulController@hapus')->name('matkul-hapus');

//nilai
Route::get('nilai' , 'NilaiController@index')->name('nilai');
Route::get('nilai-create' , 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan' , 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}' , 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}' , 'NilaiController@ubah')->name('nilai-update');
Route::get('nilai-hapus/{id}' , 'NilaiController@hilangkan')->name('nilai-hapus');
