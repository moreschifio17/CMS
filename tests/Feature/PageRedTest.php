<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\PageRed;
class PageRedTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function page_red_index() {

        $this->withoutExceptionHandling();
        $page = PageRed::factory()->create();
       
        $response = $this->getJson('api/pagered/{$page->page_id}');
        $response->assertOk();

    }
    /** @test  */
    function page_red_store(){

        $this->withoutExceptionHandling();
        $page = PageRed::factory()->create();
        $response = $this->postJson('/api/pagered', 
            ['page_id' => 1, 
             'social_net_id' => 1,
             'description' => $page->description,
            ]);

        $response->assertCreated();
    }
}
