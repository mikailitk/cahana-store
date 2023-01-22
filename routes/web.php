<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/ikan', [DashboardController::class, 'ikan'])->name('ikan');
Route::get('/pelet', [DashboardController::class, 'pelet'])->name('pelet');
Route::get('/alat', [DashboardController::class, 'alat'])->name('alat');

Auth::routes();  

Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::resource('produks', ProdukController::class);
