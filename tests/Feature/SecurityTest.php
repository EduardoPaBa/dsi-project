<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class SecurityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function testLoginPost(){

        $response = $this->call('POST', '/login', [
            'email' => 'supadmin@email.com',
            'password' => Hash::make('password'),
            '_token' => csrf_token()
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('dashboard', $response->original->name());
    }

    /** @test */
    public function testLoginTrue()
    {
        $credential = [
            'email' => 'cliente@email.com',
            'password' => Hash::make('password')
        ];
        $response = $this->post('login',$credential);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function testLoginFalse()
    {
        $response = $this->post(route('login'), [
            'email' => 'empleado2@email.com',
            'password' => Hash::make('password')
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }
}