<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function index($name, $nickname = null)
    {
        if($nickname){
            return "Bienvenido {$name}, tu apodo es {$nickname}";

        }
        else
        {
            return "Bienvenido {$name}, no tienes apodo";

        }
    }
}
