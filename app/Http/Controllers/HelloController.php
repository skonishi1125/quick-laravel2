<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

// a フレームワークとして用意されている、コントローラクラスを継承してHelloControllerクラスができる
class HelloController extends Controller
{
    // b メソッド定義 メソッドを束ねたもの＝コントローラ
    public function index() {
      // c 出力
      return 'Hello!Laravelのテストです。';
    }

    // 3.2 ビューの基本
    public function view() {
      $data = ['msg' => 'こんにちは、世界!'];
      // viewメソッド hello.viewとすると、/hello/view.blade.phpというテンプレートを探しにいく
      return view('hello.view',$data);
    }

    //3.3 DB
    public function list() {
      $data = [
        'records' => Book::all(),
      ];
      return view('hello.list', $data);
    }



}
