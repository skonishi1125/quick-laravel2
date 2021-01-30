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

// 最初から記載されている/ルート
Route::get('/', function () {
    return view('welcome');
});

// ルート情報を記述する
// get方式、URLがhelloの時、HelloControllerに定義したindexメソッドを使う、という意味
Route::get('hello' , 'HelloController@index');
Route::get('hello/view' , 'HelloController@view');

