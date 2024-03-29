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

Route::get('/vue', function () {
	return view('vue');
});

Route::get('/axios', function () {
	//automatically convert to json by laravel
	return ['Laravel','Vue','PHP','Javascript'];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('forms', 'FormController');