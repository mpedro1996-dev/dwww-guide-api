<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\DigimonController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('/user')->group(function(){

    Route::middleware('auth:api')->get('/', function (Request $request) {
        return $request->user();
    })->name("users.show");

    Route::post('/register',[AuthController::class,'register'])->name("users.register");
});

Route::middleware('auth:api')->group(function(){

    Route::resource('levels', LevelController::class);
    Route::resource('digimons', DigimonController::class);

});