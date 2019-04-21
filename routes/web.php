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

Route::get('/registration', 'viewController@registration');
Route::get('/login', 'viewController@login');
Route::post('/login', 'loginController@login');
Route::post('/registration', 'registrationController@store');
Route::get('/logindone', 'viewController@logindone');
