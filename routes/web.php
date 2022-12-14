<?php

use App\Http\Controllers\LoginController;
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

Route::any('/login', [ LoginController::class,'login'])->name('login');
Route::any('/logout', [ LoginController::class,'logout'])->name('logout');
Route::any('/inicio', [ LoginController::class,'inicio'])->name('inicio');
Route::post('/authenticate', [LoginController::class,'authenticate']);
Route::get('/dashboard', [LoginController::class,'dashboard'])->middleware('auth')->name('dashboard');
