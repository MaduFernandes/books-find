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

Auth::routes();

Route::get('/', 'BookController@show')->name('book.show');
// Salvar o registro
Route::post('/', 'BookController@store')->name('book.store');

// Listar o registro
Route::get('/livro', 'BookController@index')->name('book.index');

// Editar o registro
Route::put('/livro/{id}', 'BookController@edit')->name('book.edit');

// Deletar o registro
Route::delete('/livro/{id}', 'BookController@destroy')->name('book.destroy');


