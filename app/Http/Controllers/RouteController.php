<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function test() {
      return ('テストです!');
    }

    public function param(int $id = 1) {
      return ('id値:'.$id);
    }

    public function param2(int $id = 1) {
      return ('id値:' . $id);
    }

    public function search(string $keywd = 'あああ') {
      return ('文字列の中身:' . $keywd);
    }

    // 5.3.1
    public function info() {
      return 'infoです';
    }
    public function article() {
      return 'articleです';
    }
    

}
