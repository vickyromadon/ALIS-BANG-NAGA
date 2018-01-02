<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
* Home
*/

Route::get('/', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as' => 'home',
]);

Route::get('/populer',[
	'uses' => '\App\Http\Controllers\HomeController@populer',
	'as' => 'petisi.populer',
]);

Route::get('/terbaru',[
	'uses' => '\App\Http\Controllers\HomeController@terbaru',
	'as' => 'petisi.terbaru',
]);

Route::get('/about',[  
	'uses' => '\App\Http\Controllers\HomeController@about',
	'as' => 'about.index',
]);

/**
* Auth
*/

Route::get('/daftar', [
	'uses' => '\App\Http\Controllers\AuthController@getDaftar',
	'as' => 'auth.daftar',
	'middleware' => ['guest'],
]);

Route::post('/daftar', [
	'uses' => '\App\Http\Controllers\AuthController@postDaftar',
	'middleware' => ['guest'],
]);

Route::get('/masuk', [
	'uses' => '\App\Http\Controllers\AuthController@getMasuk',
	'as' => 'auth.masuk',
	'middleware' => ['guest'],
]);

Route::post('/masuk', [
	'uses' => '\App\Http\Controllers\AuthController@postMasuk',
	'middleware' => ['guest'],
]);

Route::get('/keluar', [
	'uses' => '\App\Http\Controllers\AuthController@getKeluar',
	'as' => 'auth.keluar',
]);

/**
* Profile
*/

Route::get('/profile/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@getProfile',
	'as' => 'profile.index',
]);

Route::get('/profile/edit/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@getEdit',
	'as' => 'profile.edit',
	'middleware' => ['auth'],
]);

Route::post('/profile/edit/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@postEdit',
	'middleware' => ['auth'],
]);

Route::get('/profile/editfoto/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@getEditFoto',
	'as' => 'profile.editfoto',
	'middleware' => ['auth'],
]);

Route::post('/profile/editfoto/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@postEditFoto',
	'middleware' => ['auth'],
]);

/**
*Search
*/

Route::get('/caripetisi',[
	'uses' => '\App\Http\Controllers\SearchController@getCariPetisi',
	'as' => 'petisi.cari',
	'middleware' => ['auth'],
]);

Route::get('/caripetisi/hasil',[
	'uses' => '\App\Http\Controllers\SearchController@getHasilPetisi',
	'as' => 'petisi.hasilcari',
	'middleware' => ['auth'],
]);

Route::get('/cariprofil',[
	'uses' => '\App\Http\Controllers\SearchController@getCariProfil',
	'as' => 'profile.cari',
	'middleware' => ['auth'],
]);

Route::get('/cariprofil/hasil',[
	'uses' => '\App\Http\Controllers\SearchController@getHasilProfil',
	'as' => 'profile.hasilcari',
	'middleware' => ['auth'],
]);

Route::get('/cariprovinsiprofil/hasil',[
	'uses' => '\App\Http\Controllers\SearchController@getHasilProvinsiProfil',
	'as' => 'profile.hasilcariprovinsi',
	'middleware' => ['auth'],
]);

/**
* Petisi
*/

Route::get('/petisi', [
	'uses' => '\App\Http\Controllers\PetisiController@getPetisi',
	'as' => 'petisi.index',
	'middleware' => ['auth'],
]);

Route::post('/petisi', [
	'uses' => '\App\Http\Controllers\PetisiController@postPetisi',
	'middleware' => ['auth'],
]);

Route::get('/detail/{petisiID}', [
	'uses' => '\App\Http\Controllers\PetisiController@getDetail',
	'as' => 'petisi.detail',
]);

Route::get('/detail/{petisiId}/like/{userId}',[
    'uses' => '\App\Http\Controllers\PetisiController@getLike',
    'as' => 'petisi.like',
    'middleware' => ['auth'],
]);

Route::get('/petisi/{username}', [
	'uses' => '\App\Http\Controllers\PetisiController@getPetisiSaya',
	'as' => 'petisi.daftar',
    'middleware' => ['auth'],
]);

Route::get('/petisi/edit/{id}', [
	'uses' => '\App\Http\Controllers\PetisiController@getEditPetisi',
	'as' => 'petisi.edit',
    'middleware' => ['auth'],
]);

Route::post('/petisi/edit/{id}', [
	'uses' => '\App\Http\Controllers\PetisiController@postEditPetisi',
    'middleware' => ['auth'],
]);

/**
* Admin
*/

Route::get('/data_petisi',[  
	'uses' => '\App\Http\Controllers\AdminController@getDataPetisi',
	'as' => 'admin.data_petisi',
    'middleware' => ['auth'],
]);

Route::get('/data_mahasiswa',[  
	'uses' => '\App\Http\Controllers\AdminController@getDataMahasiswa',
	'as' => 'admin.data_mahasiswa',
    'middleware' => ['auth'],
]);

Route::delete('/detail/{id}', 'AdminController@destroy');