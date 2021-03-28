<?php

use App\Models\Digimon;
use App\Helpers\CoreDigievolution;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\DigimonResource;

use App\Helpers\CoreRookieDigievolution;
use App\Http\Resources\DigimonCollection;

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
