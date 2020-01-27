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

use Facade\FlareClient\View;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function() {
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function() {
    return view('outras.departamentos');
})->name('departamentos');
Route::get('nome', 'ClienteController@getNome');
Route::get('idade', 'ClienteController@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'ClienteController@multiplicar');

Route::resource('clientes', 'ClienteController');