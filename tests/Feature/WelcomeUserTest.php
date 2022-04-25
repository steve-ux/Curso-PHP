<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/Rogelio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Rogelio, tu apodo es silence');
    }
    
    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/Rogelio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Rogelio');
    }
}
