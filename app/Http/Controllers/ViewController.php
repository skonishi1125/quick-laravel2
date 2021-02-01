<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ViewController extends Controller
{
    //
    public function escape() {
      return view('view.escape', [
        'msg' => '<img src="https://wings.msn.to/image/wings.jpg">
                  <p>WINGSへようこそ</p>'
      ]);
    }

    public function if() {
      return view('view.if', [
        // 乱数を取得
        'random' => random_int(0,100),
      ]);
    }

    //4.2.3
    public function isset() {
      return view('view.isset', [
        'msg' => 'こんにちは、世界!',
        // 'msg' => 'こんにちは、世界!',
      ]);
    }

    // 4.2.4
    public function switch() {
      return view('view.switch', [
        'random' => random_int(1,5),
      ]);
    }

    // 4.2.5
    public function while() {
      return view('view.while');
    }

    // 4.2.7
    public function list_foreach() {
      $data = [
        'records' => Book::all(),
      ];
      return view('view.list_foreach',$data);
    }

    public function foreach_assoc() {
      return view('view.foreach_assoc', [
        'member' => [
          'name' => 'Yamada Yoshihiro',
          'sex' => 'male',
          'birth' => '1996-11-25',
        ]
      ]);
    }

    public function foreach_loop() {
      return view('view.foreach_loop', [
        'weeks' => [
          '月',
          '火',
          '水',
          '木',
          '金',
          '土',
          '日',
        ]
      ]);
    }



}
