<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MenuApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();});

Route::get('/menus', [MenuApiController::class, 'index']);
Route::post('/menus', [MenuApiController::class, 'store']);
Route::get('/menus/{id}', [MenuApiController::class, 'show']);
Route::put('/menus/{id}', [MenuApiController::class, 'update']);
Route::delete('/menus/{id}', [MenuApiController::class, 'destroy']);

