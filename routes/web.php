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
Route::get('/user/{id}','RegisterController@show');
Route::get('/user', 'RegisterController@show');
Route::post('/signup','RegisterController@store')->name('signup');

Route::get('/regis','RegisterController@index')->name('regis');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


