<?php
//$ php artisan make:test OfficeTest --unit
// ukoliko pokrnemo testiranje s
// php artisan test
// sve tablice iz laravela se brisu
namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Office;
/*
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Cache;
*/
class OfficeTest extends TestCase
{
    //use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        

       $this->assertTrue(true);
        //$office= Office::all();
       /* $office->factory()->count(3)->make();
         
        */
       
       // Kreiram 3 dummy ureda i provjeravam jesu li stavrno kreirana
        $office= Office::factory()->count(3)->make();
        $this->assertEquals(3, $office->count(), 'Broj ureda nije 3!');       
        
        
        // DOhvatim urede iz baze podataka i uvjerim se da ima zbilja određeni broj ureda
        $brojUreda= Office::all()->count();
        $this->assertGreaterThanOrEqual(7, $brojUreda, 'Broj ureda nije 7 ili veći!');
        
        //ne radi?
        //n Laravel 8, the factory helper is no longer available
        // $office=factory(Office::class,3)->make();
        //var_dump($office);
    }
}
