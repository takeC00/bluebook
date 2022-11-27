@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')

    インデックスページ
@endsection

@section('content')
    <p>本文</p>
    <p>ControllerValue<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2022 takeshi
@endsection
