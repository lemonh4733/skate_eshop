<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('category', 'ForUserController@category');
Route::get('category/{id}', 'ForUserController@singleCategory');

Route::get('item', 'ForUserController@item');
Route::get('item/{id}', 'ForUserController@singleItem');

Route::post('order', 'ForUserController@postOrder');
