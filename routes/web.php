<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

// Route web game
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::prefix('/product')->group(function () {
    Route::get('/', [PageController::class, 'product']);
    Route::get('/detail/{id}', [PageController::class, 'detailProduct']);
});
Route::get('/contact', [PageController::class, 'contact']);

Auth::routes();

// Route game
Route::get('/utama', [PageController::class, 'gameUtama'])->middleware('auth');
Route::get('/kategori', [PageController::class, 'gameKategori'])->middleware('auth');
Route::get('/levelMudah', [PageController::class, 'levelMudah'])->middleware('auth');
Route::get('/levelSedang', [PageController::class, 'levelSedang'])->middleware('auth');
Route::get('/levelSulit', [PageController::class, 'levelSulit'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
