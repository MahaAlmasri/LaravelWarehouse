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

Route::get('/Products','ProductsController@index');
Route::post('/Products','ProductsController@store');
Route::get('/Create','ProductsController@create');
Route::get('/{product}','ProductsController@show');
Route::get('/{product}/edit','ProductsController@edit');
Route::patch('/{product}','ProductsController@update');
Route::delete('/{product}','ProductsController@destroy');
