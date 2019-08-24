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
Route::post('/store_data', 'UserController@store');
Route::get('/read_data', 'UserController@read');
Route::get('/delete_data/{id}', 'UserController@delete');
Route::get('/edit_data/{id}', 'UserController@edit');
Route::post('/update_data/{id}', 'UserController@update');