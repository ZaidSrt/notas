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

Route::get('/', function () {
    return redirect()->route('notas.index');
});

// Notas
Route::get('/notas', 'NotasController@index')->name('notas.index');
Route::get('/notas/create', 'NotasController@create')->name('notas.create');
Route::post('/notas', 'NotasController@store')->name('notas.store');
Route::delete('/notas/{notas}', 'NotasController@destroy')->name('notas.destroy');
