<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[ProdukController::class,'publicIndex'])->name('public.index');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/kategori-produk', [KategoriProdukController::class, 'index']);
    });

    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Buat Routing Produk
    // Route::get('/produk', [ProdukController::class, 'index']);
    // Route::get('/produk/create', [ProdukController::class, 'create']);
    // Route::post('/produk/store', [ProdukController::class, 'store']);
    // Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    // Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    // Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
    Route::get('/after_register', function () {
        return view('after_register');
    });

});




Route::get('front/home', function(){return view('front.home');});
Route::get('front/about', function(){return view('front.about');});
Route::get('front/contact', function(){return view('front.contact');});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
