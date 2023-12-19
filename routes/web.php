<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hi', [ProductController::class, 'index'])->name('index');
// Route::get('/user', [UserController::class, 'index']);
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('store/', [ProductController::class, 'store'])->name('store');
