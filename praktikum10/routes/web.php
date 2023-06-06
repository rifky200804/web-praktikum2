<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/kategori-produk', [KategoriProdukController::class, 'index']);


Route::get('/home', function(){return view('front.home');});
Route::get('/about', function(){return view('front.about');});
Route::get('/contact', function(){return view('front.contact');});

