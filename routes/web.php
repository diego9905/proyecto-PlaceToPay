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

//Route::get('/clients', 'clientsController@index');
//Route::get('/clients/create', 'clientsController@create');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::delete('clients/', 'clientsController@destroy')->name('clients');

Auth::routes();

Route::resource('clients', 'clientsController');

Auth::routes();

Route::resource('bills', 'billsController');

Auth::routes();

Route::get('bills/show/{id}', 'billsController@show')->name('bills');

Auth::routes();















