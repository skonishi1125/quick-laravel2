
{{--

@extends('layouts.base')
@section('title','コレクションビュー')
@section('main')
<table class="table">
  <tr>
    <th>署名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>

  @each ('subviews.book', $records, 'record', 'subviews.empty')
</table>
@endsection

--}}

@extends('layouts.base')
@section('title','コレクションビュー')
@section('main')
<table class="table">
  <tr>
    <th>署名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>

  @foreach($records as $record)
    <!-- subviews/bookファイル本体を持ってくる 引数は別に受け渡さないので[]空白 -->
    @include('subviews.book', [])
  @endforeach
</table>
@endsection
