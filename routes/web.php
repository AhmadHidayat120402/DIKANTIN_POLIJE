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
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterAppController;
use App\Http\Controllers\DetailPenjualanController;

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

// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/', [LoginAppController::class, 'index'])->name('login');
Route::post('/', [LoginAppController::class, 'authenticate']);
Route::post('/logout', [LoginAppController::class, 'logout']);
Route::get('/register', [RegisterAppController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterAppController::class, 'store']);

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'index']);
// Route::get('/first', [FirstAppController::class, 'index']);
// Route::get('/menu', [MenuController::class, 'index']);

Route::get('/pos', [PosController::class, 'index']);
Route::get('/api/customer-byid/{id}', [PosController::class, 'data']);
Route::get('/api/data-byid/{id}', [PosController::class, 'data_menu']);
Route::get('/api/add-data-penjualan', [PosController::class, 'add_data_penjualan']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/create', [PenjualanController::class, 'create']);
Route::post('/penjualan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy']);

Route::get('/penjualan', [DetailPenjualanController::class, 'index']);
Route::get('/penjualan/create', [DetailPenjualanController::class, 'create']);
Route::post('/penjualan', [DetailPenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [DetailPenjualanController::class, 'edit']);
Route::put('/penjualan/{id}', [DetailPenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [DetailPenjualanController::class, 'destroy']);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu', [MenuController::class, 'store']);
Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);
Route::put('/menu/{id}', [MenuController::class, 'update']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/kasir', [KasirController::class, 'index']);
Route::post('/kasir', [KasirController::class, 'order']);
Route::get('/kasir/hapussemua/{id}', [KasirController::class, 'hapussemua']);
Route::get('/waiting', [WaitingController::class, 'index']);
Route::get('/succes', [SuccesController::class, 'index']);


Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customer/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);
