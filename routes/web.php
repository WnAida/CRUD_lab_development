<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/appointment', 'App\Http\Controllers\appointmentController@index');
Route::post('/appointment/create', 'App\Http\Controllers\appointmentController@create');

Route::get('/doctordata', 'App\Http\Controllers\doctorController@index');
Route::post('/doctordata/create', 'App\Http\Controllers\doctorController@create');
Route::get('/doctordata/{id}/edit', 'App\Http\Controllers\doctorController@edit');
Route::post('/doctordata/{id}/update', 'App\Http\Controllers\doctorController@update');
Route::get('/doctordata/{id}/delete', 'App\Http\Controllers\doctorController@delete');
