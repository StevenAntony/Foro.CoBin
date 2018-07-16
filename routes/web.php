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

/**
 * Web Rutas GET Acceso en General
 */

Route::get('/Foro.CoBin','webController@Index')->name('foro.index');
Route::get('/Foro.CoBin/{area}/{categoria}', 'webController@CategoriaIndex')->name('foro.categoria');
Route::get('/Foro.CoBin/{area}/{categoria}/tema/{temaDetalle}', 'webController@TemaIndex')->name('foro.categoria.tema');

/**
 * Web Rutas POST
 */
// Route::post('/Foro.CoBin/BusquedaMaster',);
Route::post('/Foro.CoBin/BusquedaMaster','webController@BusquedaPOST');

/**
 * Web Rutas Get exclusivo para Auth
 */

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('Foro.CoBin/CerrarSesion', 'webController@cerrar')->middleware('auth')->name('cerrar');
Route::get('Foro.CoBin/autor/actividad/preguntar','AuthOneController@PreguntaGen')->middleware('auth')->name('auth.ViewPregunGen');

/**
 * Web Rutas POST exclusivo para Auth
 */
Route::post('Foro.CoBin/autor/actividad/preguntar','AuthOneController@ProcedurePreguntaGen')->middleware('auth')->name('auth.ProcPregunGen');

