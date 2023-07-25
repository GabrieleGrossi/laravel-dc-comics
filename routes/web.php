<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comics\ComicController as ComicController;


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
Route::get ('/', [ComicController::class, 'index']);
Route::get ('/admin/comics', [ComicController::class, 'index']);

Route::get('/admin/comics/create', [ComicController::class, 'create'])->name('admin.comics.create');
Route::post('/admin/comics', [ComicController::class, 'store'])->name('admin.comics.store');
Route::get('/admin/comics/{id}', [ComicController::class, 'show'])->name('admin.comics.show');