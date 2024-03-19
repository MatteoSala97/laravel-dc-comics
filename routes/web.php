<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\backend\ComicCrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ComicController::class, 'index' ])->name('HomePage');

Route::resource('comics', ComicCrudController::class);

Route::get('/comics/{id}', [ComicCrudController::class, 'show'])->name('comics.show');

Route::get('/comics/create', [ComicCrudController::class, 'create'])->name('comics.create');
