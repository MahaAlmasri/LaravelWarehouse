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


//Route::resource('Products/products','ProductsController');

Route::get('/Products/products','ProductsController@index');
Route::post('/Products/products','ProductsController@store');
Route::get('/Products/create','ProductsController@create');
Route::get('/Products/{product}','ProductsController@show');
Route::get('/Products/{product}/edit','ProductsController@edit');
Route::patch('/Products/{product}','ProductsController@update');
Route::delete('/Products/{product}','ProductsController@destroy');


Route::get('/Orders/orders','OrderController@index');
Route::post('/Orders/orders','OrderController@store');
Route::get('/Orders/create','OrderController@create');
Route::get('/Orders/{order}','OrderController@show');
Route::get('/Orders/{order}/edit','OrderController@edit');
Route::patch('/Orders/{order}','OrderController@update');
Route::delete('/Orders/{order}','OrderController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
