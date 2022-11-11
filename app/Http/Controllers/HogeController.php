<?php

namespace App\Http\Controllers;

use App\Services\HogeService;
use Illuminate\Http\Request;

class HogeController extends Controller
{
    private $hoge;
    public function __construct(HogeService $hoge_service)
    {
        $this->hoge = $hoge_service;
    }

    public function index(HogeService $hoge_service)
    {
        $this->hoge->hoge();
        echo '↑$this->hoge->hoge()<br><br>';
        $hoge_service->hoge();
        echo '↑$hoge_service->hoge()<br>';
    }
}
