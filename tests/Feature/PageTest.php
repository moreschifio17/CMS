<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Page;
class PageTest extends TestCase
{
    use RefreshDatabase;
    /** @test  */

    function page_index() {

        $this->withoutExceptionHandling();
        Page::factory()->count(2)->create();
       
        $response = $this->getJson('api/page');
        $response->assertOk();

    }
    /** @test  */
    function page_store(){

        $this->withoutExceptionHandling();
        $page = Page::factory()->create();
        $response = $this->postJson('/api/page', 
            ['page_title' => $page->page_title, 

             'page_description' => $page->page_title]);

        $response->assertCreated();
    }
     /** @test  */

    function page_update(){

        $this->withoutExceptionHandling();
        $page = Page::factory()->create();
        $response = $this->putJson('/api/page/{$page->page_id}', 
             ['page_title' => 'Sally', 

             'page_description' => 'asasasasas']);

             $response->assertOk();
    }

     /** @test  */

    public function page_delete()
    {
        $this->withoutExceptionHandling();
        $page = Page::factory()->create();
        $response = $this->deleteJson('/api/page/{$page->page_id}')
        ->assertOk();
    }
 

 
     
}
