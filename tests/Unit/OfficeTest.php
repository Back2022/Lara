<?php
//$ php artisan make:test OfficeTest --unit

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
use \App\Models\Office;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Cache;

class OfficeTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        
        //TODO ovo ne radi, test modela Office
       $this->assertTrue(true);
        $office= Office::all();
        /* $office->factory()->count(3)->make();
        
        */
        
        //Ovo dolje ne radi -> Error: Class "App\Models\Office" not found
        //$office= Office::factory()->count(3)->make();
        
        //ne radi?
       // $office=factory(Office::class,3)->make();
        var_dump($office);
    }
}
