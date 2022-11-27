<?php

namespace App\Http\Controllers;

use App\Services\HogeService;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index', ['message' => 'Hello!']);
        
    }
}
