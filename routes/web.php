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

Route::get('/users', 'UserController@index')->name('users');
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/actus', 'ActuController@index')->name('actus');
Route::get('/reservations', 'ReservationController@index')->name('reservations');

Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::get('/actus/create', 'ActuController@create')->name('actus.create');
Route::get('/reservations/create', 'ReservationController@create')->name('reservations.create');

Route::post('/users/store', 'UserController@store')->name('users.store');
Route::post('/articles/store', 'ArticleController@store')->name('articles.store');
Route::post('/actus/store', 'ActuController@store')->name('actus.store');
Route::post('/reservations/store', 'ReservationController@store')->name('reservations.store');

Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');


Route::put('/users/edit/{id}/update', 'UserController@update')->name('users.update');

Route::delete('/users/edit/{id}/destroy', 'UserController@destroy')->name('users.destroy');