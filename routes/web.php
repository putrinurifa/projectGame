<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
        Route::get('admin/leaderboard', [AdminController::class, 'leaderboard']);

        // Route manajemen pengguna
        Route::get('/admin/cari/', [UserController::class, 'search']);
        Route::get('/admin/delete/{id}', [UserController::class, 'delete']);
        Route::resource('admin/pengguna', UserController::class);

        // Route manajemen soal
        Route::get('/admin/deleteSoal/{id}', [GameController::class, 'delete']);
        Route::get('/admin/search/', [GameController::class, 'search']);
        Route::resource('admin/soal', GameController::class);
    });

    Route::middleware(['player'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // Route awal game
        Route::get('/utama', [PageController::class, 'gameUtama']);
        Route::get('/kategori', [PageController::class, 'gameKategori']);
        Route::get('/levelMudah', [PageController::class, 'levelMudah']);
        Route::get('/levelSedang', [PageController::class, 'levelSedang']);
        Route::get('/levelSulit', [PageController::class, 'levelSulit']);

        // Route mulai game
        Route::get('/gameMudah/{id}', [PageController::class, 'gameMudah']);
        Route::get('/gameSedang/{id}', [PageController::class, 'gameSedang']);
        Route::get('/gameSulit/{id}', [PageController::class, 'gameSulit']);
        Route::get('/timeoutMudah', [PageController::class, 'timeoutMudah']);
        Route::get('/timeoutSedang', [PageController::class, 'timeoutSedang']);
        Route::get('/timeoutSulit', [PageController::class, 'timeoutSulit']);
        Route::get('/hasilMudah/{username}/{jawaban}/{id}', [PageController::class, 'hasilMudah']);
        Route::post('/hasilSedang', [PageController::class, 'hasilSedang']);
        Route::post('/hasilSulit', [PageController::class, 'hasilSulit']);
        Route::get('/leaderboard', [PageController::class, 'leaderboard']);
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});
