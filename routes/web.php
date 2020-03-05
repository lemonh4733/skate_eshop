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
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::post('/update/prfl/{user}', 'HomeController@profileUpdate');

Route::get('/goods', 'ItemController@goods');
Route::get('/addnew', 'ItemController@index');
Route::post('/add', 'ItemController@create');
Route::get('/update-item&{item}', 'ItemController@edit');
Route::post('/edit/{item}', 'ItemController@update');
Route::get('/delete&{item}', 'ItemController@destroy');
Route::get('/myitems', 'ItemController@myItems');

Route::get('/addcat', 'CategoryController@index');
Route::post('/add/cat', 'CategoryController@create');
Route::get('/delete/cat/{category}', 'CategoryController@destroy');

Route::get('/orders', 'OrderController@index');
Route::get('/order/{order}', 'OrderController@order');
Route::get('/order/{order}/done', 'OrderController@orderDone');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
});
