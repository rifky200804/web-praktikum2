<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/kabar', function(){
    return view('kondisi');
});

Route::get('/nilai', function(){
    return view('nilai');
});

Route::get('/pasien', function(){
    return view('pasien');
});

Route::get('/form',[FormController::class,'index']);
Route::post('/hasil',[FormController::class,'hasil']);

Route::get('/form-skill',[SkillController::class,'index']);
Route::post('/hasil-skill',[SkillController::class,'hasil']);

