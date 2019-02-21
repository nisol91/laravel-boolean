<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('student/filter', 'Api\StudentController@filter');
//ricorda che il controller del filtro degli studenti e nelle api e inoltre in questo caso ci vuole il back slash
