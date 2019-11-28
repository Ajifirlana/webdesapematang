<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/cari', 'WelcomeController@cari');
Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');
Route::get('backend/tambahberita', 'HomeController@tambahberita');
Route::get('backend/editberita/{id}','HomeController@editberita');
Route::get('backend/tampilberita/{id}','HomeController@tampilberita');
Route::get('backend/hapusberita/{id}','HomeController@hapusberita');
Route::post('backend/tambahberitastore','HomeController@tambahberitastore');
Route::post('backend/updateberita/{id}','HomeController@updateberita');

Route::get('backend/galeri', 'GaleriController@index');
Route::get('backend/tambahgaleri', 'GaleriController@tambahgaleri');
Route::post('backend/tambahgaleristore','GaleriController@tambahgaleristore');
Route::get('backend/tampilgaleri/{id}','GaleriController@tampilgaleri');
Route::get('backend/editgaleri/{id}','GaleriController@editgaleri');
Route::post('backend/updategaleri/{id}','GaleriController@updategaleri');


Route::get('backend/widget', 'WidgetsController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
