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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');


//CarsController
Route::get('/kirimemail','MailController@index');
Route::resource('cars', 'CarsController');
Route::get('/cars', 'CarsController@index');
Route::get('/cars/create', 'CarsController@create');
//Route::get('/cars/{car}', 'CarsController@show');
Route::post('/cars', 'CarsController@store');
Route::delete('/cars/{car}', 'CarsController@destroy');
Route::get('/cars/{car}/edit', 'CarsController@edit');
Route::patch('/cars/{car}', 'CarsController@update')->name('cars.update');

Route::patch('/cars/{car}/', 'CarsController@default')->name('cars.default');
