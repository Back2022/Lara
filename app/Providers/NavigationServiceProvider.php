<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


// $ php artisan make:provider NavigationServiceProvider

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     * Prilikom prikaza bilo kojeg viewa, 
     * mapiraj varijablu polje linkova
     *
     * @return void
     */
    public function boot()
    {
     
       // preko fascade
      //  \Illuminate\Support\Facades\View::class
       // view()->composer('ispod.*', function (\Illuminate\View\View $view){
        view()->composer('*', function (\Illuminate\View\View $view){
        $link1="http:\\\\www.google.com";
        $link2="http:\\\\www.google.com";        
        $link3="http:\\\\www.google.com";   
            $arr=compact('link1','link2','link3');
            return $view->with('arr',$arr);
                   
        });
    }
}
