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
        $data = [
            'msg'=>'これはコントローラーから',
            'id'=>$request->id,
            'hogeService'=>$this->hoge->hoge()
        ];
        return view('hello.index', $data);
    }
}
