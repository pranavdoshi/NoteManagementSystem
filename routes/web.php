<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'NotesController@index');

Auth::routes();

Route::get('/notes', 'NotesController@add');
Route::post('/notes', 'NotesController@create');

Route::get('/notes/{notes}','NotesController@edit');
Route::post('/notes/{notes}','NotesController@update');
