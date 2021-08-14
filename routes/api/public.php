<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\V1\AddressesController;
use \App\Http\Controllers\V1\TravelsController;
use \App\Http\Controllers\V1\CarsController;
use \App\Http\Controllers\V1\DriversController;



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

Route::apiResource('drivers',DriversController::class);
Route::apiResource('drivers.cars',CarsController::class);
Route::apiResource('drivers.travels',TravelsController::class);
Route::apiResource('travels.addresses',AddressesController::class);

/*
Route::apiResource('drivers.travels.addresses',AddressesController::class);
*/
