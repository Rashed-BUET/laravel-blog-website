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


Auth::routes();

Route::get('/', 'ArticleController@index');
Route::get('/home', 'ArticleController@index');
Route::post('/article', 'ArticleController@store');
Route::get('/article/{article}','ArticleController@view');

Route::get('/createForm',function (){
    return view('createView');
});
