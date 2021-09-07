<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_shows_the_users_list()
    {
        $response = $this->get('/usuarios')
        ->assertStatus(200)        
        ->assertSee('Listado de usuarios')
        ->assertSee('eduardo')
        ->assertSee('juan');

        
    }
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_shows_a_default_if_the_users_list_is_empty()
    {
        $response = $this->get('/usuarios?empty')
        ->assertStatus(200)        
        ->assertSee('Listado de usuarios')
        ->assertSee('No hay usuarios de registro');

        
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_loads_the_users_details_page()
    {
        $response = $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalles del id: 5');


    }

     /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_loads_the_new_user_page()
    {
        $response = $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Mostrando nuevo user');


    }
}
