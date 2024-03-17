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

Route::get('/contato-consulta', function () {
    return view('contato-consulta');
});

Route::get('/contato-form', function () {
    return view('contato-form');
});

Route::get('/contato-consulta','App\Http\Controllers\ContatoController@index');
Route::get('/contato-criar','App\Http\Controllers\ContatoController@create');
Route::post('/contato-salvar','App\Http\Controllers\ContatoController@store');

