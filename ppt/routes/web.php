<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::put('update-user/{id}',[UserController::class, 'update'])->name('update-user');
Route::get('partida/{idUsuario}',[GameController::class, 'partida']);
Route::get('choose',[GameController::class, 'vista']);
Route::get('users',[UserController::class, 'index']);
Route::get('clasificacion',[UserController::class, 'clasificacion']);
Route::get('registro', function () {
    return view('registro');
});

Route::post('guardar',[UserController::class, 'store']);



