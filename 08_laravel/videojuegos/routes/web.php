<?php

use App\Http\Controllers\CompaniaController;
use App\Http\Controllers\VideojuegosController;
use App\Http\Controllers\ConsolasController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/consolas/info',function(){
return view('consolas/info');
});




Route::resource('/consolas', ConsolasController::class);

Route::get('/videojuegos/search',
[VideojuegosController::class,'search'])
->name('videojuegos.search');

 Route::resource('/videojuegos', VideojuegosController::class);

 Route::resource('/companias', CompaniaController::class);

 /* Route::get('/consolas',
 [ConsolasController::class, 'index']);

 Route::get('/consolas/create',
 [ConsolasController::class, 'create']); */

 /* Route::get('/videojuegos',
 [VideojuegosController::class, 'index']);

 Route::get('/videojuegos/create',
 [VideojuegosController::class, 'create']); */

/* Route::get('/videojuegos', function () {
    return view('videojuegos');
}); */
