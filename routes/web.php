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
use App\Http\Controllers\ProfileUserPivotController;
use App\Http\Controllers\CommentController;

Route::get('/create',[PostsController::class, 'create'])->name('create');
Route::post('/add',[PostsController::class, 'store'])->name('add');
Route::get('/post/{post}',[PostsController::class, 'show'])->name('show');
Route::get('/post',[PostsController::class, 'store'])->name('store');


Route::post('/follow',[ProfileUserPivotController::class, 'follow'])->name('follow');
Route::post('/unfollow',[ProfileUserPivotController::class, 'unfollow'])->name('unfollow');

Route::post('/comment',[CommentController::class, 'comment'])->name('comment');

Route::get('/',[ProfileController::class, 'index'])->middleware(['auth'])->name('principal');
Route::get('/show/{username}',[ProfileController::class, 'show'])->name('show');
Route::get('/me',[ProfileController::class, 'me'])->name('me');
Route::get('/config',[ProfileController::class, 'config'])->name('config');
Route::post('/change',[ProfileController::class, 'change'])->name('change');

require __DIR__.'/auth.php';
