<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\SuccesController;
use App\Http\Controllers\WaitingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FirstAppController;
use App\Http\Controllers\LoginAppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'index']);
// Route::get('/first', [FirstAppController::class, 'index']);
// Route::get('/menu', [MenuController::class, 'index']);

Route::get('/pos', [PosController::class, 'index']);
Route::get('/api/customer-byid/{id}', [PosController::class, 'data']);
Route::get('/api/data-byid/{id}', [PosController::class, 'data_menu']);
Route::get('/api/add-data-penjualan', [PosController::class, 'add_data_penjualan']);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu', [MenuController::class, 'store']);
Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);
Route::put('/menu/{id}', [MenuController::class, 'update']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);

Route::get('/', [DashboardController::class, 'index']);
Route::get('/loginApp', [LoginAppController::class, 'index']);
Route::get('/kasir', [KasirController::class, 'index']);
Route::get('/waiting', [WaitingController::class, 'index']);
Route::get('/succes', [SuccesController::class, 'index']);



Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customer/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);
