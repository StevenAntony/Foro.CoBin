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

ROUTE::GET('/',function () {
  return redirect('Foro');
});

Route::prefix('Foro')->group(function () {
  Route::name('foro.')->group(function () {
    Route::get('/', 'Foro\webController@Index')->name('index');
    Route::get('/{area}/{categoria}', 'Foro\webController@CategoriaIndex')->name('categoria');
    Route::get('/{area}/{categoria}/tema/{temaDetalle}', 'Foro\webController@TemaIndex')->name('categoria.tema');
    Route::get('/{area}/{categoria}/tema/{temaDetalle}/{codigoPre}', 'Foro\webController@PreguntaView')->name('categoria.preguntaView');
  });
});


/**
 * Web Rutas GET Acceso en General
 */


/**
 * Web Rutas POST
 */

 // Route::post('/Foro.CoBin/BusquedaMaster',);
Route::post('/Foro.CoBin/BusquedaMaster', 'Foro\webController@BusquedaPOST');

/**
 * Web Rutas Get exclusivo para Auth
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('Foro.CoBin/CerrarSesion', 'Foro\webController@cerrar')->middleware('auth')->name('cerrar');

//---------
//Preguntar - Respuestas
//---------
Route::get('Foro.CoBin/autor/actividad/preguntar', 'Foro\AuthOneController@PreguntaGen')->middleware('auth')->name('auth.ViewPregunGen');
Route::get('Foro.CoBin/autor/actividad/preguntar/{categoria}/{tema}/{codigo_Tem}','Foro\AuthOneController@PreguntaEspec')->middleware('auth')->name('auth.ViewPregunEspec');
// ?id={idtem}
/**
 * Web Rutas POST exclusivo para Auth
 */
Route::post('Foro.CoBin/autor/actividad/preguntar', 'Foro\AuthOneController@ProcedurePreguntaGen')->middleware('auth')->name('auth.ProcPregunGen');
Route::post('Foro.CoBin/autor/actividad/preguntar/Especifico', 'Foro\AuthOneController@ProcedurePreguntaEsp')->middleware('auth')->name('auth.ProcPregunEsp');


Route::prefix('curriculumVitae')->group(function () {
  Route::name('curriculumVitae.')->group(function () {
    Route::get('{user}', 'CurriculumVitae\webController@Index')->name('index');
  });
});


