<?php

use App\Http\Controllers\api\CustomerControler;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//TODO: Authenitcation 
// Route::apiResource('v1/customers', CustomerControler::class);

// Route::middleware(['auth:sanctum'])->name('api.')->group( function(){
//     // Route::apiResource('v1/customers', CustomerControler::class);
// });