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

Route::get('/','PortalController@home')->name('home');
// User Route
Route::get('/user','UserController@index');
Route::get('/user/login','UserController@login')->name('user.login');
Route::get('/user/dashboard','UserController@dashboard')->name('user.dashboard');
Route::get('/logout','UserController@logout')->name('user.logout');
Route::post('/user/login','UserController@loginPost')->name('user.login.post');
Route::get('/user/register','UserController@register')->name('user.register');
Route::post('/user/register','UserController@registerPost')->name('user.register.post');

//Authentication Link

Route::middleware(['auth'])->group(function(){

Route::get('/user/dashboard','UserController@dashboard')->name('user.dashboard');

	Route::resource('pencalonan', 'PencalonanController');
	Route::resource('sesi', 'SesiController')->middleware('role:admin');

});




