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

Route::delete('clients/', 'clientsController@destroy')->name('clients');

Route::resource('clients', 'clientsController');

Route::resource('bills', 'billsController');

Route::get('bills/show/{id}', 'billsController@show')->name('bills');

Route::resource('sellers', 'sellersController');

Route::resource('products', 'productsController');

Route::get('/bills/{id}/addproducts', 'billsController@addproducts');

Route::get('/bills/{id}/billsProducts/create', 'billsController@createBillProduct');

Route::post('bills/{id}', 'billsController@storeBillProduct')->name("billsProducts.post");



















