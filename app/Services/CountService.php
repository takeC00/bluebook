<?php

namespace App\Services;

use App\Models\Result;

class CountService
{
    public function search($providedIn)
    {
        $inThisYear = substr($providedIn,0 , -2);
        return $inThisYear;
    }
    public function resultYear($userCode, $providedIn, $result)
    {
        //$userCode =1;
        //$providedIn =20220101;
        //$result ='a_result';
        $monthCalc = Result::select('user_code')
            ->where('user_code', $userCode)
            ->where('provided_in', $providedIn)
            ->selectRaw("SUM({$result}) AS total_result")
            ->groupBy('user_code')
            ->first();
        $yearResult = $monthCalc->total_result;

        return $yearResult;
    }

    public function resultMonth($userCode, $providedIn, $result)
    {
        $monthCalc = Result::select('user_code')
            ->where('user_code', $userCode)
            ->where('provided_in', $providedIn)
            ->selectRaw("SUM({$result}) AS total_result")
            ->groupBy('user_code')
            ->first();
    }
}
