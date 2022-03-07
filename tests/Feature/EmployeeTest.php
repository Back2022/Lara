<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_to_office_index_returns_200()
    {
        $response = $this->get('/employee');

        $response->assertStatus(200);
    }
}
