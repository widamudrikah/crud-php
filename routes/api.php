<?php

use App\Http\Controllers\ApiSayurController;
use App\Http\Controllers\VeganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(ApiSayurController::class)->group(function(){
    Route::get('/view-login', 'view-login');
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->controller(VeganController::class)->group(function(){
    Route::get('/sayur', 'index');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
