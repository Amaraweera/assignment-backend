<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UserTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('/api/users?page=1');
        $response->assertStatus(200);
    }
}
