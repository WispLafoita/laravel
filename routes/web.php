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

Auth::routes();

Route::get('/','BaseController@getIndex');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles', 'BaseController@getStatics');

Route::post('home', 'HomeController@postIndex');

Route::get('home/delete/{id}','HomeController@getDelete');

Route::get('home/edit/{id}','HomeController@getEdit')->where('id','[0-9]+');

Route::post('home/edit/{id}','HomeController@postEdit')->where('id','[0-9]+');

Route::get('news', 'NewsController@getNews');

Route::get('news/{id}', 'NewsController@getOne');

Route::get('/{id}', 'BaseController@getStatic');//всегда последним