<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use Illuminate\Http\Request;
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

    Route::get('/user/profile/{id}', 
            [App\Http\Controllers\UserController::class, 'show'])
            ->name('user.profile');  

// CUSTOM Middleware
// php artisan make:middleware CheckAge
// kreira app/Http/Middleware/CheckAge
// dodati u app/Http/Kernel.php ...
Route::middleware('CheckAge')->group(function () {
    Route::get('/myage/{age}', function ($age) {
        
        print_r(Route::current()->gatherMiddleware());
        echo "<br>My age:".$age." ajmo na cugu";
        
    });
    
});

// rute s prefiksom
Route::prefix('user')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    // ova ruta redirekta s user/admin  na imenovanu rutu 'admin.dodaj' (url:admin/dodaj)
    Route::get('/admin', [App\Http\Controllers\UserController::class, 'redirektajMeNaAdmin']);
    
    Route::get('/user/{userid}', function ($userid) {
        return $userid;
    })->where('userid', '[3-7]+'); 

    Route::get('/user/{id}/{name}', function ($id, $name) {
       return "Moje ime je ".$name." i igram pod brojem ".$id;
    })->where(['id' => '[0-9]', 'name' => '[a-zA-Z]+'])->name('admin.user.id.name');    
});

//Nacin pisanja ruta s prefiksom i MW Laravel < V8    
Route::group(['prefix'=>'admin','middleware' => ['web', 'api']],function(){
        Route::get('/admins', function () {
       return Route::current()->gatherMiddleware();
    })->name('admin.admins');   

    
    Route::get('/admin/{id}/{name}', function ($id, $name) {
       return "Moje admin ime je ".$name." i igram pod brojem ".$id;
    })->where(['id' => '[0-9]', 'name' => '[a-zA-Z]+'])->name('admin.user.id.name');   
});

//Nacin pisanja ruta s prefiksom i MW Laravel >= V8  
Route::name('admin.')->middleware(['web', 'api'])->prefix('admin')->group(function () {
    Route::get('/dodaj', function () {
        return Route::current()->gatherMiddleware();
    })->name('dodaj');
 
    Route::get('/brisi', function () {
        return Route::current()->gatherMiddleware();
    })->name('brisi');
});

    


//View ruta
Route::view('/welcome', 'ispod.welcome', ['name' => 'Taylor']);

//redirekcija
Route::redirect('/here', '/there');

// Primjer rute prema kontroleru
//vidi zasto ne radi ova ruta: https://laravel.com/docs/9.x/routing
// Target class [UserController] does not exist.
// zbog ovoga: https://stackoverflow.com/questions/67545382/why-my-laravel-routes-work-in-laravel-7-but-does-not-work-in-laravel-8

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