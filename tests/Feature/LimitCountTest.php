<?php

namespace Tests\Feature;

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
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
