<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test  */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/hector/ZeroCool')
            ->assertStatus(200)
            ->assertSee('Bienvenido Hector, tu apodo es ZeroCool');
    }

    /** @test  */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/hector')
            ->assertStatus(200)
            ->assertSee('Bienvenido Hector');
    }  
}
