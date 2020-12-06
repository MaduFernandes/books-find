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

// Cliente
Route::get('/', 'BookController@index')->name('client.index');
Route::any('/search', 'BookController@search')->name('book.search');

// Login
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/', 'Auth\LoginController@login')->name('login.conta');
Route::get('/login/sair', 'Auth\LoginController@logout')->name('logout');

// MIDDLEWARE - ADMIN
Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/create', 'AdminController@create')->name('admin.create');
    Route::get('/admin/{id}/livro', 'AdminController@show')->name('admin.show');
    Route::get('/admin/{id}', 'AdminController@edit')->name('admin.edit');
    Route::put('/admin/{id}', 'AdminController@update')->name('admin.update');
    Route::post('/admin', 'AdminController@store')->name('admin.store');
    Route::delete('/admin/{id}', 'AdminController@destroy')->name('admin.destroy');
});
