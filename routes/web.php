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
use App\Http\Controllers\KakisIepircējsController;
use App\Http\Controllers\VetarstsController;

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

Route::get('/kakis_iepircejs', [KakisIepircejsController::class, 'index'])->name('kakis_iepircejs.index');
Route::get('/kakis_iepircejs/create', [KakisIepircejsController::class, 'create'])->name('kakis_iepircejs.create');
Route::post('/kakis_iepircejs', [KakisIepircejsController::class, 'store'])->name('kakis_iepircejs.store');
Route::get('/kakis_iepircejs/{kakisIepircējs}', [KakisIepircejsController::class, 'show'])->name('kakis_iepircejs.show');
Route::get('/kakis_iepircejs/{kakisIepircējs}/edit', [KakisIepircejsController::class, 'edit'])->name('kakis_iepircejs.edit');
Route::put('/kakis_iepircejs/{kakisIepircējs}', [KakisIepircejsController::class, 'update'])->name('kakis_iepircejs.update');
Route::delete('/kakis_iepircejs/{kakisIepircējs}', [KakisIepircejsController::class, 'destroy'])->name('kakis_iepircejs.destroy');

Route::get('/vetarsts', [VetarstsController::class, 'index'])->name('vetarsts.index');
Route::get('/vetarsts/create', [VetarstsController::class, 'create'])->name('vetarsts.create');
Route::post('/vetarsts', [VetarstsController::class, 'store'])->name('vetarsts.store');
Route::get('/vetarsts/{vetarsts}', [VetarstsController::class, 'show'])->name('vetarsts.show');
Route::get('/vetarsts/{vetarsts}/edit', [VetarstsController::class, 'edit'])->name('vetarsts.edit');
Route::put('/vetarsts/{vetarsts}', [VetarstsController::class, 'update'])->name('vetarsts.update');
Route::delete('/vetarsts/{vetarsts}', [VetarstsController::class, 'destroy'])->name('vetarsts.destroy');

// Languages
Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');

Route::get('/', function () {
    return view('welcome');
});
