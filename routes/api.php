<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MenuApiController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\PenjualanController;

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

Route::get('/menu   s', [MenuApiController::class, 'index']);
Route::post('/menus', [MenuApiController::class, 'store']);
Route::get('/menus/{id}', [MenuApiController::class, 'show']);
Route::put('/menus/{id}', [MenuApiController::class, 'update']);
Route::delete('/menus/{id}', [MenuApiController::class, 'destroy']);

Route::post('/penjualan/save', [PenjualanController::class, 'store'])->name('penjualan.save');
Route::post('/penjualan/tambahJumlah', [PenjualanController::class, 'tambahJumlah'])->name('penjualan.tambahJumlah');
Route::post('/penjualan/kurangJumlah', [PenjualanController::class, 'kurangJumlah'])->name('penjualan.kurangJumlah');
Route::post('/penjualan/hapusItem', [PenjualanController::class, 'hapusItem'])->name('penjualan.hapusItem');
Route::get('/cart/{id}', [DetailPenjualanController::class, 'get_all'])->name('cart.all');
Route::post('/cart/save', [DetailPenjualanController::class, 'store'])->name('cart.save');
