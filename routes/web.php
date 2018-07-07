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

Route::get('/Foro.CoBin','webController@Index')->name('foro.index');
Route::get('/Foro.CoBin/{area}/{categoria}', 'webController@CategoriaIndex')->name('foro.categoria');