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

Route::get('privacy-policy', 'StaticPageController@privacy_policy')->name('static_page.privacy');
Route::get('work-with-us', 'StaticPageController@workWithUs')->name('static_page.workwithus');
//sarebbero, in ordine: NOME PAGINA / VIEW || CONTROLLER@METODO || URL


