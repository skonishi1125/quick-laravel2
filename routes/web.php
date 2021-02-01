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

// Part3 ルート情報を記述する
// get方式、URLがhelloの時、HelloControllerに定義したindexメソッドを使う、という意味
Route::get('hello' , 'HelloController@index');
Route::get('hello/view' , 'HelloController@view');
Route::get('hello/list' , 'HelloController@list');

// Part4
Route::get('view/escape' , 'ViewController@escape');
Route::get('view/if' , 'ViewController@if');
Route::get('view/isset' , 'ViewController@isset');
Route::get('view/switch' , 'ViewController@switch');
Route::get('view/while' , 'ViewController@while');
Route::get('view/list_foreach' , 'ViewController@list_foreach');
Route::get('view/foreach_assoc' , 'ViewController@foreach_assoc');
Route::get('view/foreach_loop' , 'ViewController@foreach_loop');