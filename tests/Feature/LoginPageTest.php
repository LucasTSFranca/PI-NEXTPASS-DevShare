<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    public function test_login_page_is_reachable_from_the_home_page(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(route('login'))
            ->assertSee('Login');

        $this->get(route('login'))
            ->assertOk()
            ->assertSee('Entre na DevShare')
            ->assertSee('name="email"', false)
            ->assertSee('name="password"', false)
            ->assertSee(route('login.store'), false)
            ->assertSee('Feito por quem compartilha')
            ->assertDontSee('Entrar com Google');
    }
}
