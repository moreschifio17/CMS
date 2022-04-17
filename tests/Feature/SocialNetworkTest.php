<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SocialNetworkTest extends TestCase
{
    /**
     * @test
     */
    public function social_network_index()
    {
        $response = $this->get('/api/social');

        $response->assertStatus(200);
    }
}
