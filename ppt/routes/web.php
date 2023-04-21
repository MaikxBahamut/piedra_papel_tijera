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

Route::post('new-user',[UserController::class, 'store']);
Route::put('update-user/{id}',[UserController::class, 'update']);
Route::get('partida/{idUsuario}/{movUser}',[GameController::class, 'partida']);
Route::get('elige',[GameController::class, 'vista']);
Route::get('users',[UserController::class, 'index']);