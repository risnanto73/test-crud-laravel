<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// (/profile sebagai endpoint)
Route::resource('/profile', UserController::class)->middleware('auth');
Route::resource('/produk', ProdukController::class)->middleware('auth');

Route::get('/table', [App\Http\Controllers\UserController::class, 'table'])->name('table')->middleware('auth');

Route::get('/ganti', [App\Http\Controllers\ChangePasswordController::class, 'ganti'])->name('ganti')->middleware('auth');
Route::put('/update-pass', [App\Http\Controllers\ChangePasswordController::class, 'UpdatePass'])->name('update-pass')->middleware('auth');