<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;

class CtrlController extends Controller
{
    //
    public function plain() {
      return response('ハローワールド',200)
        ->header('Content-Type','text/plain');
    }
    // return 'ハローワールド'と同じ意味

    public function header() {
      return response()
        ->view('ctrl.header',['msg' => 'こんにちは、世界！'],200)
        ->header('Content-Type','text/xml');
    }

    // 6.1.4 ファイルをダウンロードさせる
    public function outFile() {
      return response()
        ->download('/Users/skoni/Downloads/210131のコピー.png','download.png',
            ['content-type'=>'image/png']);
    }

    public function outImage() {
      return response()
        ->file('/Users/skoni/Downloads/210131のコピー.png',
            ['content-type'=>'image/png']);
    }

    // 6.1.5
    public function redirectBasic() {
      return redirect('hello/list');
    }
    // 6.2 リクエスト 
    // 書くまえにuse Illuminate\Http\Requestと上に書く必要がある
    public function index(Request $req) {
      return 'リクエストパス：' . $req->path();
    }

    // 6.2.2
    public function form() {
      return view('ctrl.form',['result'=>'']);
    }

    public function result(Request $req) {
      // ->nameはinput name=""で指定されたものが入る
      // $name = $req->name;
      $name = $req->input('name','名無しのゴべえ');
      return view('ctrl.form', [
        'result'=>'こんにちは、' . $name . 'さん！'
      ]);
    }

    // 6.2.3
    public function upload() {
      return view('ctrl.upload',['result' => '']);
    }
    public function uploadfile(Request $req) {
      // ファイル有無を確認
      if (!$req->hasFile('upfile')) {
        return 'ファイルを指定してください';
      }
      // ファイル取得
      $file = $req->upfile;
      if (!$file->isValid()) {
        return 'アップロードに失敗しました。';
      }
      // オリジナルのファイル名を取得
      $name = $file->getClientOriginalName();
      // アップされたデータを保存
      $file->storeAs('files',$name);
      return view('ctrl.upload',[
        'result' => $name . 'をアップロードしました.'
      ]);

    }

    // 6.3ミドルウェア
    public function middle() {
      return 'log is recorded!!';
    }

    


}
