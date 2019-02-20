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

Route::get('/', 'HomeController@index')->name('home');
Route::get('corso', 'CorsoController@index')->name('corso');
Route::get('metodo', 'MetodoController@index')->name('metodo');

Route::get('dopo-il-corso', 'DopoCorsoController@index')->name('dopo_corso');
//per mostrare il singolo studente
Route::get('dopo-il-corso/student-show/{slug?}', 'DopoCorsoController@show')->name('dopo_corso.show');
//metto il punto di domanda perche cosi diventa opzionale lo slug, se non c e non mi da errore



Route::get('privacy-policy', 'StaticPageController@privacy_policy')->name('static_page.privacy');

Route::get('work-with-us', 'StaticPageController@workWithUs')->name('static_page.workwithus');
//sarebbero, in ordine: NOME PAGINA / VIEW || CONTROLLER@METODO || URL


