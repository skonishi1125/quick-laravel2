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

use App\Http\Controllers\CtrlController;
use App\Http\Middleware\LogMiddleware;

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
Route::get('view/forelse' , 'ViewController@forelse');
//4.3 レイアウト
Route::get('view/master' , 'ViewController@master');
Route::get('view/comp' , 'ViewController@comp');
Route::get('subviews/subview' , 'ViewController@subview');
Route::get('view/list' , 'ViewController@list');

// Part5 ルーティング
Route::match(['get','post'],'routes/test', 'RouteController@test');
// ブラウザのURIに入れた値がコントローラで処理される
// ?を書かないと必須となる
Route::get('routes/param/{id?}', 'RouteController@param');

// 5.2.3 ;を1行目の後に付けないこと、正規表現2番目のカッコは{}
Route::get('routes/param2/{id?}' , 'RouteController@param2')
  ->where(['id' => '[0-9]{2,3}']);

// 5.2.4
Route::get('routes/search/{keywd?}' , 'RouteController@search')
  ->where('keywd' , '.*');

// 5.3.1 routes/members/...のURLをまとめてルーティングする
// (ルートグループ)
Route::prefix('routes/members')->group(function () {
  Route::get('info' , 'RouteController@info');
  Route::get('article' , 'RouteController@article');
});

// 5.3.3
Route::view('/route', 'routes.test', ['name' => 'Laravel']);

// 5.3.4 リダイレクト /hogeにアクセスすると/routeに飛ぶようになった
// 301はステータスコード
Route::redirect('/hoge', '/route', 301);

// Part6 6.1.2
Route::get('ctrl/header' , 'CtrlController@header');

// 6.1.4 これにアクセスすると画像ファイルを読み込ませることができる
Route::get('ctrl/outFile' , 'CtrlController@outFile');
Route::get('ctrl/outImage' , 'CtrlController@outImage');
Route::get('ctrl/redirectBasic' , 'CtrlController@redirectBasic');
// 6.2
Route::get('ctrl/index' , 'CtrlController@index');
// 6.2.2 プチハンズオン POST形式なのでこれもpostにする
// postにしたのにエラーになるからmatchにした
Route::match(['get','post'],'ctrl/result' , 'CtrlController@result');
// Route::post('ctrl/result' , 'CtrlController@result');

// 6.2.3
Route::match(['get','post'],'ctrl/upload','CtrlController@upload');
Route::match(['get','post'],'ctrl/uploadfile','CtrlController@uploadfile');

// 6.3 手前に「use App\Http\Middleware\LogMiddleware」と書かないとdoes not existエラー
Route::get('ctrl/middle','CtrlController@middle')
  ->middleware(LogMiddleware::class);
