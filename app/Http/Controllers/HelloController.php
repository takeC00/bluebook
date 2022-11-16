<?php

namespace App\Http\Controllers;

use App\Services\HogeService;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    private $hoge;
    public function __construct(HogeService $hoge_service)
    {
        $this->hoge = $hoge_service;
    }

    public function index(Request $request)
    {
        //$data = [
        //    'msg'=>'これはコントローラーから',
        //    'id'=>$request->id,
        //    'hogeService'=>$this->hoge->hoge()
        //];
        $data = [
            'msg' => 'お名前を入力してください'
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' =>'こんにちは'.$msg.'さん',
        ];
        return view('hello.index', $data);
    }
}
