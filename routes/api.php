<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;

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

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('category/{category}', [CategoryController::class, 'show']);
Route::put('category/{category}', [CategoryController::class, 'update']);
Route::delete('category/{category}', [CategoryController::class, 'destroy']);

Route::get('providers', [ProviderController::class, 'index']);
Route::post('providers', [ProviderController::class, 'store']);
Route::get('provider/{provider}', [ProviderController::class, 'show']);
Route::put('provider/{provider}', [ProviderController::class, 'update']);
Route::delete('provider/{provider}', [ProviderController::class, 'destroy']);
