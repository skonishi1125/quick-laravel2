@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
  <!-- 簡単な値を渡す -->
  <!-- components/alert.blade.phpの$typeに、successを代入 -->
  @component('components.alert',['type' => 'success'])
    <!-- コンテンツを引き渡す -->
    <!-- $alert_titleに値を渡す -->
    @slot('alert_title')
      はじめてのコンポーネント
    @endslot
    <!-- その他のコンテンツを渡す -->
    <!-- 今回の場合は$slotに入る -->
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます
  @endcomponent
@endsection