<?php

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
use App\Http\Controllers\AuthController

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('auth/login', [AuthController::class, 'login']);
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::post('auth/refresh', [AuthControllerre::class, 'fresh']);
    Route::post('auth/me', [AuthController::class, 'me']);

    Route::get('/produtos', AnimeController::class, 'list')->middleware('auth:jwt')

