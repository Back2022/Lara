<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    //use DatabaseMigrations;
    //use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_to_employee_index_returns_200()
    {
        //$this->artisan('db:seed');
        
        $response = $this->get('/employee');

        $response->assertStatus(200);
    }
}
