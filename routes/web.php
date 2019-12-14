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

Route::get('/','CarController@index');


Route::get('/CreateCar','CarController@create');
Route::get('/IndexCar','CarController@index');
Route::get('/ShowCar/{car}','CarController@show');
Route::put('/editCar/update/{car}','CarController@update');
Route::get('/editCar/{car}','CarController@edit');
Route::get('/destroy/{car}','CarController@destroy');
Route::post('/CreateCarStore','CarController@store');