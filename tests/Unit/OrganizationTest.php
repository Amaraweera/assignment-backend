<?php

namespace Tests\Unit;

use Tests\TestCase;

class OrganizationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('/api/organizations?page=1');
        $response->assertStatus(200);
    }
}
