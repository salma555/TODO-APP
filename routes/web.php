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
Route::get('/todo','todoControler@index');
Route::get ('/todo/{todo}','todoControler@show');
Route::get('/create','todoControler@create');
Route::post('/create','todoControler@store');
Route::get('/todo/{todo}/edit','todoControler@edit');
Route::post('/todo/{todo}','todoControler@update');
Route::get('/todo/{todo}/delete','todoControler@destroy');
