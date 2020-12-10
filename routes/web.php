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

//Login
Route::view('/', 'auth/login');

Route::group(['middleware' => 'auth'], function (){
Route::get('/admin', 'BookController@index')->name('book.index');
Route::get('/admin/create', 'BookController@create')->name('book.create');
Route::post('/admin', 'BookController@store')->name('book.store');
Route::get('/admin/{id}/show', 'BookController@show')->name('book.show');
Route::get('/admin/{id}/edit', 'BookController@edit')->name('book.edit');
Route::put('/admin/{id}', 'BookController@update')->name('book.update');
Route::delete('/admin/{id}', 'BookController@destroy')->name('book.destroy');
});