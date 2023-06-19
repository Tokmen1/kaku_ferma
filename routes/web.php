<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\IepircejsController;
use App\Http\Controllers\KakisController;
Route::resource('kakis', KakisController::class);

Route::get('/kakis', [KakisController::class, 'index'])->name('kakis.index');
Route::get('/kakis/create', [KakisController::class, 'create'])->name('kakis.create');
Route::post('/kakis', [KakisController::class, 'store'])->name('kakis.store');
Route::get('/kakis/{kakis}', [KakisController::class, 'show'])->name('kakis.show');
Route::get('/kakis/{kakis}/edit', [KakisController::class, 'edit'])->name('kakis.edit');
Route::put('/kakis/{kakis}', [KakisController::class, 'update'])->name('kakis.update');
Route::delete('/kakis/{kakis}', [KakisController::class, 'destroy'])->name('kakis.destroy');

Route::get('/iepirceji', [IepircejsController::class, 'index'])->name('iepirceji.index');
Route::get('/iepirceji/create', [IepircejsController::class, 'create'])->name('iepirceji.create');
Route::post('/iepirceji', [IepircejsController::class, 'store'])->name('iepirceji.store');
Route::get('/iepirceji/{iepircejs}', [IepircejsController::class, 'show'])->name('iepirceji.show');
Route::get('/iepirceji/{iepircejs}/edit', [IepircejsController::class, 'edit'])->name('iepirceji.edit');
Route::put('/iepirceji/{iepircejs}', [IepircejsController::class, 'update'])->name('iepirceji.update');
Route::delete('/iepirceji/{iepircejs}', [IepircejsController::class, 'destroy'])->name('iepirceji.destroy');

Route::get('/', function () {
    return view('welcome');
});
