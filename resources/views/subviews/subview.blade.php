@extends('layouts.base')
@section('title','サブビュー')
@section('main')

  @include('components.alert', [
    'type' => 'success',
    'alert_title' => 'はじめてのサブビュー',
    'slot' => '通常ビューと同じく表示されます',
  ])

@endsection