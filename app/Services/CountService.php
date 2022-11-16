<?php

namespace App\Services;

use App\Models\Result;

class CountService
{
    public function calcMonth($userCode, $providedIn, $result)
    {
        $userCode =1;
        $providedIn =20220101;
        $result ='a_result';
        $monthCalc = Result::select('user_code')
            ->where('user_code', $userCode)
            ->where('provided_in', $providedIn)
            ->selectRaw("SUM({$result}) AS total_result")
            ->groupBy('user_code')
            ->first();
        $yearResult = $monthCalc->total_result;

        return $yearResult;
    }
}
