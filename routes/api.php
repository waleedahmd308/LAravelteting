<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummmyAPI;
use App\Http\Controllers\moin;
use App\Http\Controllers\UserController; // Added UserController namespace


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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[dummmyAPI::class,'getData']);  
Route::get("data/moindata",[moin::class,'getData']);

// Assuming UserController exists and is in the App\Http\Controllers namespace
Route::get('users/create', [UserController::class, 'create']);
Route::post('users/store', [UserController::class, 'store']);
