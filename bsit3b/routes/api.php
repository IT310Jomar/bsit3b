<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// api 
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::get('/employee',[AdminController::class,'displayData']);
    Route::get('/display-locations-data',[TestController::class,"displayDataLocationTable"]);
    Route::post('/add-location',[TestController::class,'addLocation']);
    Route::post('/update-location/{id}',[TestController::class,'updateLocation']);


    Route::delete('/delete-location/{id}',[TestController::class,'deleteFunction']);
});
