<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::post('blogs','BlogController@store');
Route::post('blogs/update','BlogController@update');
Route::get('blogs','BlogController@index');
Route::get('blogs/{id}/edit','BlogController@edit');
Route::get('blogs/{id}','BlogController@show');
Route::get('blogs/create', 'BlogController@create');*/
Route::resource('blogs','BlogController');

Route::get('blogs/destroy/{id}','BlogController@destroy');