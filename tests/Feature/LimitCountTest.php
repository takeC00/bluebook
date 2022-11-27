<?php

namespace Tests\Feature;

use App\Models\Result;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LimitCountTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_()
    {
        $result = new Result();
        $result->code = '1';
        $result->user_code = '123';
        $result->provided_in = '202212';
        $result->a_result = '1';
        $result->b_result = '2';
        $result->c_result = '3';
        $result->save;

        $resultb = new Result();
        $resultb->code = '2';
        $resultb->user_code = '123';
        $resultb->provided_in = '202213';
        $resultb->a_result = '10';
        $resultb->b_result = '20';
        $resultb->c_result = '30';
        $resultb->save;

        ('results',[

        ]);
    }
}
