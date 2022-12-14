<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\TakeOver;
use App\Services\CountService;
use Illuminate\Http\Request;

class UpperLimitController extends Controller
{
    public function show()
    {
        //$userCode = '1';
        //$providedIn = '20220101';
        ////$fiscalYear = substr($providedIn, 0, -2);

        //$ryA = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->whereBetween('provided_in',[20220101,20221201])
        //    ->selectRaw('SUM(a_result) AS total_a_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$yearResultA = $ryA->total_a_result;

        //$ryB = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->whereBetween('provided_in',[20220101,20221201])
        //    ->selectRaw('SUM(b_result) AS total_b_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$yearResultB = $ryB->total_b_result;

        //$ryC = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->whereBetween('provided_in',[20220101,20221201])
        //    ->selectRaw('SUM(c_result) AS total_c_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$yearResultC = $ryC->total_c_result;

        //$rmA = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->where('provided_in', $providedIn)
        //    ->selectRaw('SUM(a_result) AS total_a_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$monthResultA = $rmA->total_a_result;

        //$rmB = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->where('provided_in', $providedIn)
        //    ->selectRaw('SUM(b_result) AS total_b_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$monthResultB = $rmB->total_b_result;

        //$rmC = Result::select('user_code')
        //    ->where('user_code', 1)
        //    ->where('provided_in', $providedIn)
        //    ->selectRaw('SUM(c_result) AS total_c_result')
        //    ->groupBy('user_code')
        //    ->first();
        //$monthResultC = $rmC->total_c_result;

        //$tA = TakeOver::where('user_code', 1)
        //    ->whereYear('provided_in', 2022)
        //    ->select('a_take_over')
        //    ->first();
        //$takeOverA = $tA->a_take_over;

        //$tB = TakeOver::where('user_code', 1)
        //    ->whereYear('provided_in', 2022)
        //    ->select('b_take_over')
        //    ->first();
        //$takeOverB = $tB->b_take_over;

        //$tC = TakeOver::where('user_code', 1)
        //    ->whereYear('provided_in', 2022)
        //    ->select('c_take_over')
        //    ->first();
        //$takeOverC = $tC->c_take_over;

        //$yearLimitCountA = $yearResultA + $takeOverA;
        //$monthLimitCountA = $monthResultA + $takeOverA;
        //$yearLimitCountB = $yearResultB + $takeOverB;
        //$monthLimitCountB = $monthResultB + $takeOverB;
        //$yearLimitCountC = $yearResultC + $takeOverC;
        //$monthLimitCountC = $monthResultC + $takeOverC;

        //return view('Limit.index', compact(
        //    'yearResultA',
        //    'yearResultB',
        //    'yearResultC',
        //    'monthResultA',
        //    'monthResultB',
        //    'monthResultC',
        //    'takeOverA',
        //    'takeOverB',
        //    'takeOverC',
        //    'yearLimitCountA',
        //    'yearLimitCountB',
        //    'yearLimitCountC',
        //    'monthLimitCountA',
        //    'monthLimitCountB',
        //    'monthLimitCountC',
        //));

    }

    private $count;
    public function __construct(CountService $countService)
    {
        $this->count = $countService;
    }
}
