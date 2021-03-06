<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
      public function test_home_page_contains_text()
    {
        $response = $this->get('/');
       
        $response->assertSee('Laracasts offers thousands');
        $response->assertDontSee('Office');
        
    }  
    
        public function test_the_application_returns_an_error_no_page_ananas()
    {
        $response = $this->get('/ananas');

        $response->assertStatus(404);
    }
}
