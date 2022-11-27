<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $result = new Result();
        $result->a_result = $request->a_result;
        $result->b_result = $request->b_result;
        $result->c_result = $request->c_result;
        $result->provided_in = $request->provided_in;
        $result->user_code = $request->user_code;
        $result->save();
    }
}
