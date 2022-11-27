<?php

namespace App\Service;
use APP\Models\LimitCount;

class kasangensanService
{
    public function calc()
    {
        $limitcount = new LimitCount();

    }

    public function between()
    {
        $startedOn = Limitcount::where('user_code', 1)
            ->first();
        //指定日時
        $target_day = $startedOn->provided_in;
        //指定日時を月はじめに変換する
        $target_day = date("Y-m-1");
        //1ヶ月後の日時を取得
        return view('Limit.index', compact('target_day'));

    }

}
