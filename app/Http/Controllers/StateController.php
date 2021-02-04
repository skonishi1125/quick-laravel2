<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    //
    public function recCookie() {
      return response()
        ->view('state.view')
        ->cookie('app_title','laravel', 60*24*30);
    }

    public function readCookie(Request $req) {
      // return view('bladeファイル'),'app_title'という変数で,
      // リクエストオブジェクトのcookie('app_title')にアクセスする
      return view('state.readcookie', [
        'appCookie' => $req->cookie('app_title'),
      ]);
    }

    public function session1(Request $req) {
      $req->session()->put('series','速習シリーズ');
      return 'セッションを保存しました。';
    }

    public function session2(Request $req) {
      // 2番目のは規定値。値が設定されていない場合は、未定がseriesセッションに入る
      $series = $req->session()->get('series','未定');
      return 'シリーズ:' . $series;
    }

}
