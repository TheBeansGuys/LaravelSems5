<?php

use App\Http\Controllers\boxController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
Route::get("/percobaan", [boxController::class, 'coba']);
Route::get("/box", [boxController::class, 'index']);

Route::get("/form",[formController::class,'index'])->name('form.index');
Route::post("/form",[formController::class,'action'])->name('form.action');
Route::get("/form/{id}",[formController::class,'get'])->where('id','[0-9]+')->name('form.get');

Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

Route::get('/barang', [BarangController::class, 'index']);
