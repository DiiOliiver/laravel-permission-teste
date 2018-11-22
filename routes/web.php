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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nomes', 'HomeController@nome')->name('nome')->middleware('role:admin');
Route::get('/animes', 'HomeController@anime')->name('anime');
Route::get('/jogos', 'HomeController@jogo')->name('jogo');
