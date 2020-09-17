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

//Index

Route::get('/', 'IndexController@all');
Route::post('/', 'IndexController@filtered');

//Annonces
Route::resource('annonces', 'AnnonceController')->middleware('verified');

//Auth

Auth::routes(['verify' => true]);
Route::get('laravel', function () {
    return view('welcome');
})->middleware('verified');
Route::get('/logout', 'Auth\LoginController@logout');

//User account management

Route::get('/dashboard', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myinfos', 'UserController@show');
Route::post('/myinfos', 'UserController@store');
