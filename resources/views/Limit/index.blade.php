@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')

    インデックスページ
@endsection

@section('content')
    <p>本文</p>

    <ul>
        @each('components.item', $data, 'item')
    </ul>
@section('footer')
copyright 2022 takeshi
@endsection
