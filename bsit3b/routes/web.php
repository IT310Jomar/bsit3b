<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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



Route::get("/v1/employments",[AdminController::class,"getEmploymentsData"]);
Route::get('/v1/dashboard',[AdminController::class,'displayDashboard']);



Route::get('/employee',[AdminController::class,'displayEmployeeDashboard']);
Route::get('/locations',[TestController::class,'displayPageLocation'])->name('location');
