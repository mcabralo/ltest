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

Route::view('/','welcome');
Route::view('contact','contact');
// Forma de facilitar a descrição de uma route. O primeiro argumento é o nome que aparecerá na url e o segundo a view
Route::view('about','about');
Route::get('customers', 'CustomersController@list');

///POST METHOD 
Route::post('customers', 'CustomersController@store');