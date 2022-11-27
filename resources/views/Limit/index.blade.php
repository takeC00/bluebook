@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')

    インデックスページ
@endsection

@section('content')
    <p>本文</p>

    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージcomponentです
        @endslot
    @endcomponent
@endsection

@section('footer')
copyright 2022 takeshi
@endsection
