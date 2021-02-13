<?php

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

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AnimeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::resource('animes', \App\Http\Controllers\AnimeController::class);
Route::resource('generos', \App\Http\Controllers\AnimeController::class);

Route::Post('/novo/anime', [AnimeController::class, 'store'])->name('novo-anime');

require __DIR__.'/auth.php';
