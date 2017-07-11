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

Route::get('/')->uses('PasteController@create')->name('home');
Route::post('/store')->uses('PasteController@store')->name('store');
Route::get('/destroy')->uses('PasteController@destroy')->name('destroy');

// this route always at the bottom
Route::get('/{slug}')->uses('PasteController@view')->name('view');