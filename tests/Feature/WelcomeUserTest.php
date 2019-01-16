<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function it_welcomes_user_whith_nickname()
    {
        $this->get('saludo/faty/witsshewolf')
             ->assertStatus(200)
             ->assertSee('Bienvenida Faty, tu apodo es itsshewolf');
    }

    /**@test */
    function it_welcomes_users_not_nickname()
    {
        $this->get('saludo/faty')
             ->assertStatus(200)
             ->assertSee('Bienvenida Faty, no tienes apodo');
    }
}
