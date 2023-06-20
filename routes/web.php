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
use App\Http\Controllers\BaribaController;
use App\Http\Controllers\RotallietaController;
use App\Http\Controllers\KakisPardevejsController;
use App\Http\Controllers\PardevejsController;
use App\Http\Controllers\KakisRotallietaController;
use App\Http\Controllers\KakisBaribaController;


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

Route::get('/bariba', [BaribaController::class, 'index'])->name('bariba.index');
Route::get('/bariba/create', [BaribaController::class, 'create'])->name('bariba.create');
Route::post('/bariba', [BaribaController::class, 'store'])->name('bariba.store');
Route::get('/bariba/{bariba}', [BaribaController::class, 'show'])->name('bariba.show');
Route::get('/bariba/{bariba}/edit', [BaribaController::class, 'edit'])->name('bariba.edit');
Route::put('/bariba/{bariba}', [BaribaController::class, 'update'])->name('bariba.update');
Route::delete('/bariba/{bariba}', [BaribaController::class, 'destroy'])->name('bariba.destroy');

Route::get('/rotallietas', [RotallietaController::class, 'index'])->name('rotallietas.index');
Route::get('/rotallietas/create', [RotallietaController::class, 'create'])->name('rotallietas.create');
Route::post('/rotallietas', [RotallietaController::class, 'store'])->name('rotallietas.store');
Route::get('/rotallietas/{rotallieta}', [RotallietaController::class, 'show'])->name('rotallietas.show');
Route::get('/rotallietas/{rotallieta}/edit', [RotallietaController::class, 'edit'])->name('rotallietas.edit');
Route::put('/rotallietas/{rotallieta}', [RotallietaController::class, 'update'])->name('rotallietas.update');
Route::delete('/rotallietas/{rotallieta}', [RotallietaController::class, 'destroy'])->name('rotallietas.destroy');

Route::get('/pardevejs', [PardevejsController::class, 'index'])->name('pardevejs.index');
Route::get('/pardevejs/create', [PardevejsController::class, 'create'])->name('pardevejs.create');
Route::post('/pardevejs', [PardevejsController::class, 'store'])->name('pardevejs.store');
Route::get('/pardevejs/{pardevejs}', [PardevejsController::class, 'show'])->name('pardevejs.show');
Route::get('/pardevejs/{pardevejs}/edit', [PardevejsController::class, 'edit'])->name('pardevejs.edit');
Route::put('/pardevejs/{pardevejs}', [PardevejsController::class, 'update'])->name('pardevejs.update');
Route::delete('/pardevejs/{pardevejs}', [PardevejsController::class, 'destroy'])->name('pardevejs.destroy');

Route::get('/kakis_pardevejs', [KakisPardevejsController::class, 'index'])->name('kakis_pardevejs.index');
Route::get('/kakis_pardevejs/create', [KakisPardevejsController::class, 'create'])->name('kakis_pardevejs.create');
Route::post('/kakis_pardevejs', [KakisPardevejsController::class, 'store'])->name('kakis_pardevejs.store');
Route::get('/kakis_pardevejs/{kakis_pardevejs}', [KakisPardevejsController::class, 'show'])->name('kakis_pardevejs.show');
Route::get('/kakis_pardevejs/{kakis_pardevejs}/edit', [KakisPardevejsController::class, 'edit'])->name('kakis_pardevejs.edit');
Route::put('/kakis_pardevejs/{kakis_pardevejs}', [KakisPardevejsController::class, 'update'])->name('kakis_pardevejs.update');
Route::delete('/kakis_pardevejs/{kakis_pardevejs}', [KakisPardevejsController::class, 'destroy'])->name('kakis_pardevejs.destroy');

Route::get('/kakis-rotallieta', [KakisRotallietaController::class, 'index'])->name('kakis_rotallieta.index');
Route::get('/kakis-rotallieta/create', [KakisRotallietaController::class, 'create'])->name('kakis_rotallieta.create');
Route::post('/kakis-rotallieta', [KakisRotallietaController::class, 'store'])->name('kakis_rotallieta.store');
Route::get('/kakis-rotallieta/{kakisRotallieta}', [KakisRotallietaController::class, 'show'])->name('kakis_rotallieta.show');
Route::get('/kakis-rotallieta/{kakisRotallieta}/edit', [KakisRotallietaController::class, 'edit'])->name('kakis_rotallieta.edit');
Route::put('/kakis-rotallieta/{kakisRotallieta}', [KakisRotallietaController::class, 'update'])->name('kakis_rotallieta.update');
Route::delete('/kakis-rotallieta/{kakisRotallieta}', [KakisRotallietaController::class, 'destroy'])->name('kakis_rotallieta.destroy');

Route::get('/kakis_bariba', [KakisBaribaController::class, 'index'])->name('kakis_bariba.index');
Route::get('/kakis_bariba/create', [KakisBaribaController::class, 'create'])->name('kakis_bariba.create');
Route::post('/kakis_bariba', [KakisBaribaController::class, 'store'])->name('kakis_bariba.store');
Route::get('/kakis_bariba/{id}', [KakisBaribaController::class, 'show'])->name('kakis_bariba.show');
Route::get('/kakis_bariba/{id}/edit', [KakisBaribaController::class, 'edit'])->name('kakis_bariba.edit');
Route::put('/kakis_bariba/{id}', [KakisBaribaController::class, 'update'])->name('kakis_bariba.update');
Route::delete('/kakis_bariba/{id}', [KakisBaribaController::class, 'destroy'])->name('kakis_bariba.destroy');

///Get images from storage
Route::get('storage/', function ($filename)
{
    $path = storage_path('public/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

// Languages
Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');

Route::get('/{lang?}', function ($lang="en") {
    App::SetLocale($lang);
    return view('welcome');
});
