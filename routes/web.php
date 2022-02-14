<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Primjer rute prema kontroleru
//vidi zasto ne radi ova ruta: https://laravel.com/docs/9.x/routing
// Target class [UserController] does not exist.
// zbog ovoga: https://stackoverflow.com/questions/67545382/why-my-laravel-routes-work-in-laravel-7-but-does-not-work-in-laravel-8
use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'index']);
Route::get('/user2', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user3', 'App\Http\Controllers\UserController@index');
//Route::get('/user4', 'UserController@index'); // OVO NE RADI od LARAVEL V8!
//
//
// prikazi primjer dependency injection
use Illuminate\Http\Request;
Route::get('/showrequest',function(Request $req){
    foreach ($req->query->all() as $key => $value) {
        echo "$key=$value<br>";
    }
    
   // dd($req);
   // var_dump($req);
});


// za potrebe testiranja sa talend REST alatom
Route::get('/showtoken',function(){
    return csrf_token();
});



//primjer kad zelimo pozvati preko get i preko post metode
Route::match(['get', 'post'], '/getpost', function () {
    return 'Mene se moze pozvati i sa GET i sa POST';
});
 
Route::any('/getany', function (Request $req, App\Models\User $u) {
//dd($u-all());  //todo pokreni migraciju autorizacije
    dd($req);
   //return 'Mene se moze pozvati bilo kojom HTTP metodom';
});


// primjer rute prema view i imenovanje rute "home"
Route::get('/', function () {
    return view('welcome');
})->name('home');

//prumjer mapiranja rute na view u poddirektoriju "resources\views\ispod"
Route::get('/ispod', function () {
    return view('ispod.welcome');
})->name('ruta_ispod');

// primjer rute za closure funkciju koja vraća neki string
Route::get('/greeting', function () {
    return 'Hello World';
});