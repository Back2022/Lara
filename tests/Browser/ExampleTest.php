<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *@group basic
     *@return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laracasts offers thousands')
                    ->assertDontSee('Laracasts XXXX thousands')
                    ->click('#linkovi > li:nth-child(1) > a')
                    ->assertUrlIs('https://www.google.com/');
        });
    }
        /**
     * A basic browser test example.
     *@group basic
     *@skip
     *@return void
     */
    public function testBasicExample2()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laracasts offers thousands')
                    ->assertDontSee('Laracasts XXXX thousands')
                    ->click('#linkovi > li:nth-child(1) > a')
                    ->assertUrlIs('https://www.google.com/');
        });
    }
        /**
     * A basic browser test example.
     *@group advance
     *@return void
     */
    public function testBasicExample3()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laracasts offers thousands')
                    ->assertDontSee('Laracasts XXXX thousands')
                    ->click('#linkovi > li:nth-child(1) > a')
                    ->assertUrlIs('https://www.google.com/');
        });
    }
}
