<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('pupukku');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/pupuk', [App\Http\Controllers\PupukController::class, 'index'])->name('pupukku_index');
Route::get('/home/pupuk/create', [App\Http\Controllers\PupukController::class, 'create'])->name('pupukku_create');
Route::get('/home/pupuk/edit/{id}', [App\Http\Controllers\PupukController::class, 'edit'])->name('pupukku_edit');
Route::put('/home/pupuk/update/{id}', [App\Http\Controllers\PupukController::class, 'update'])->name('pupukku_update');
Route::post('/home/pupuk/store', [App\Http\Controllers\PupukController::class, 'store'])->name('pupukku_store');
Route::delete('/home/pupuk/delete/{id}', [App\Http\Controllers\PupukController::class, 'destroy'])->name('pupukku_delete');
Route::get('/home/pegawai', [App\Http\Controllers\InstansiController::class, 'index'])->name('pegawai_index');
Route::get('/home/pegawai/create', [App\Http\Controllers\InstansiController::class, 'create'])->name('pegawai_create');
Route::post('/home/pegawai/store', [App\Http\Controllers\InstansiController::class, 'store'])->name('pegawai_store');