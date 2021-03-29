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

/*
Route::get('/', function () {
    return view('welcome');
});*/
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

Route::get('/post/create',[PostsController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('/post/{post}',[ProfileController::class, 'show'])->name('show');
Route::get('/post',[ProfileController::class, 'store'])->name('store');

Route::get('/',[ProfileController::class, 'index'])->middleware(['auth'])->name('principal');
Route::get('/show/{username}',[ProfileController::class, 'show'])->name('show');
Route::get('/me',[ProfileController::class, 'me'])->name('me');

require __DIR__.'/auth.php';
