@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')

    インデックスページ
@endsection

@section('content')
    <p>本文</p>
    <p>これは<middleware>google.com</middleware>へのリンクです</p>
    <p>これは<middleware>yahoo.co.jp</middleware>へのリンクです</p>
@endsection

@section('footer')
copyright 2022 takeshi
@endsection
