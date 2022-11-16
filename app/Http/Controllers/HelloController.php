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

    public function index()
    {
        //$data = [
        //    'msg'=>'これはコントローラーから',
        //    'id'=>$request->id,
        //    'hogeService'=>$this->hoge->hoge()
        //];
        return view('hello.index', ['msg'=>'']);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
