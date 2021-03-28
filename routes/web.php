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

Route::get('/',[PostsController::class, 'index'])->middleware(['auth'])->name('principal');
Route::get('/show/{user}',[PostsController::class, 'show'])->name('show');


Route::get('/myProfile', function () {
    return view('myProfile');
})->middleware(['auth'])->name('myProfile');

require __DIR__.'/auth.php';
