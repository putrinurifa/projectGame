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

// Route awal game
Route::get('/utama', [PageController::class, 'gameUtama'])->middleware('auth');
Route::get('/kategori', [PageController::class, 'gameKategori'])->middleware('auth');
Route::get('/levelMudah', [PageController::class, 'levelMudah'])->middleware('auth');
Route::get('/levelSedang', [PageController::class, 'levelSedang'])->middleware('auth');
Route::get('/levelSulit', [PageController::class, 'levelSulit'])->middleware('auth');

// Route mulai game
Route::get('/gameMudah/{id}', [PageController::class, 'gameMudah'])->middleware('auth');
Route::get('/gameSedang/{id}', [PageController::class, 'gameSedang'])->middleware('auth');
Route::get('/gameSulit/{id}', [PageController::class, 'gameSulit'])->middleware('auth');
Route::get('/timeoutMudah', [PageController::class, 'timeoutMudah'])->middleware('auth');
Route::get('/timeoutSedang', [PageController::class, 'timeoutSedang'])->middleware('auth');
Route::get('/timeoutSulit', [PageController::class, 'timeoutSulit'])->middleware('auth');
Route::get('/hasilMudah/{username}/{jawaban}/{id}', [PageController::class, 'hasilMudah'])->middleware('auth');
Route::post('/hasilSedang', [PageController::class, 'hasilSedang'])->middleware('auth');
Route::post('/hasilSulit', [PageController::class, 'hasilSulit'])->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
