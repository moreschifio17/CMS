<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function test_page_index(){
        $response = $this->get('api/page');
        $response->assertStatus(200);
    }
    function test_page_store(){
        $response = $this->get('api/page');
        $response->assertStatus(200);
    }
    
}
