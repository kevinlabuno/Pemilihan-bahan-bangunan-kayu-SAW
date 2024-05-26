<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgoritmaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PerhitunganController;

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
})->name('beranda');


Route::get('algoritma', [AlgoritmaController::class,'index'])->name('algoritma');
Route::get('data', [DataController::class, 'index'])->name('data');
Route::get('bobot', [PerhitunganController::class, 'bobot_index'])->name('bobot');
Route::post('bobot', [PerhitunganController::class, 'bobot'])->name('bobot.post');
Route::get('perhitungan', [PerhitunganController::class, 'index'])->name('perhitungan');