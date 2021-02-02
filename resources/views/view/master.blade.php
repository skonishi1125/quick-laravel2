<!-- 利用する共通レイアウトを宣言 -->
@extends('layouts.base')
<!-- titleセクションのコンテンツ -->
@section('title', '共通レイアウトの基本')
<!-- mainセクションのコンテンツ -->
@section('main')
  @parent
  <p style="color: red">{{ $msg }}</p>
  <p style="color: red">master.blade.phpから書き込んでいます</p>
@endsection