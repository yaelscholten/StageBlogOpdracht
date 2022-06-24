<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', 'App\Http\Controllers\BlogController@home');
Route::get('/blogs', 'App\Http\Controllers\BlogController@index'); 
Route::get('/blogs/create', 'App\Http\Controllers\BlogController@create'); 
Route::post('/blogs', 'App\Http\Controllers\BlogController@opslaan'); 
Route::get('/blogs/{id}', 'App\Http\Controllers\BlogController@show'); 
Route::delete('/blogs/{id}', 'App\Http\Controllers\BlogController@verwijder'); 
Route::get('/blogs/edit/{id}','App\Http\Controllers\BlogController@edit');
Route::post('/blogs/edit','App\Http\Controllers\BlogController@update');



