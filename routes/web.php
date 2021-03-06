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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'RegisterController@index')->name('registerIndex');
Route::post('/register', 'RegisterController@registerAction')->name('registerAction');

Route::get('/login', 'LoginController@index')->name('loginIndex');
Route::post('/login', 'LoginController@loginAction')->name('loginAction');

Route::get('/resetPassword', 'ResetPasswordController@index')->name('resetIndex');
Route::post('/resetPassword', 'ResetPasswordController@resetAction')->name('resetAction');

Route::get('/profile/{id}', 'ProfileController@profileIndex')->name('profileIndex');
Route::post('/profile/{id}', 'ProfileController@profileAction')->name('profileAction');

Route::get('/why-syberry', 'SyberryInfoController@whySyberryAction')->name('whySyberry');

Route::get('/quality', 'FooterController@qualityRedirect')->name('quality');
