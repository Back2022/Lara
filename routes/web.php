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
Route::get('/user', [UserController::class, 'index']);

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