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

// LIST COCHE
Route::get('/coche', 'CocheController@index');

// GET COCHE
Route::get('/coche/{id}', 'CocheController@show');

// CRETE
Route::post('/coche/create', 'CocheController@store');

// DESTROY
Route::delete('/coche/{id}', 'CocheController@destroy');

// UPDATE
Route::put('/coche/{id}', 'CocheController@update');
