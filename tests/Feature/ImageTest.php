<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_image_index()
    {
        $response = $this->get('/api/images');

        $response->assertStatus(200);
    }

    function test_image_create(){
        $response = $this->post('/api/images',[
            'image_name' => 'picky',
            'image_extention' => '.png',
            'created_at' => null,
            'updated_at' => null
        ]);
        $response->assertStatus(201);

    }

     function test_image_update(){
        $response = $this->put('/api/images/7',[
            'image_name' => 'color',
            'image_extention' => '.png',
            'created_at' => null,
            'updated_at' => null
        ]);
        $response->assertStatus(200);

    }

    public function test_image_delete()
    {
        $response = $this->get('/api/images/9');

        $response->assertStatus(200);
    }
    
  
}
