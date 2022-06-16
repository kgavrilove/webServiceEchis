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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/error', function () {
    return view('main.error');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//
Route::get('/table', [App\Http\Controllers\TableController::class, 'index'])->name('table');
Route::get('/edit/{assetId}', [App\Http\Controllers\TableController::class, 'edit'])->name('edit');
Route::get('/add', [App\Http\Controllers\TableController::class, 'add'])->name('add');
Route::get('/delete/{assetId}', [App\Http\Controllers\TableController::class, 'delete'])->name('delete');
Route::get('/asset/{assetId}', [App\Http\Controllers\TableController::class, 'asset'])->name('asset');
Route::get('/update', [App\Http\Controllers\TableController::class, 'update'])->name('update');
