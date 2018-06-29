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
Route::get('/app','WebpagesController@app');
Route::get('/Contactos','WebpagesController@Contactos');
Route::get('/SOS','WebpagesController@SOSapp');
Route::get('/sidebar','WebpagesController@sidebar');
Route::get('/','WebpagesController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
