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

// Listar o registro
Route::get('/', 'BookController@index')->name('book.index');

// Cadastra o registro
Route::get('/livro/cadastrar', 'BookController@create')->name('book.create');

// Salvar o registro
Route::post('/', 'BookController@store')->name('book.store');

Route::get('/livro/{id}/visualizar', 'BookController@show')->name('book.show');

// Editar o registro
Route::get('/livro/{id}/editar', 'BookController@edit')->name('book.edit');

// Atualizar o registro
Route::put('/livro/{id}', 'BookController@update')->name('book.update');

// Deletar o registro
Route::delete('/livro/{id}', 'BookController@destroy')->name('book.destroy');


