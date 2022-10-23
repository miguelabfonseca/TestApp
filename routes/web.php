<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbTestController;
use App\Http\Controllers\TvSeriesController;
use App\Http\Controllers\AsciiArrayController;
use App\Http\Controllers\PrimeNumbersController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('primenumbers', [PrimeNumbersController::class, 'index'])->name('primenumbers');

Route::get('ascii', [AsciiArrayController::class, 'index'])->name('ascii');
Route::get('removecharacter', [AsciiArrayController::class, 'removeChar'])->name('removecharacter');
Route::get('verifyremovecharacter', [AsciiArrayController::class, 'verifyRemovedChar'])->name('verifyremovecharacter');

Route::get('next-on-tv', [TvSeriesController::class, 'index'])->name('nextontv');
Route::post('next-on-tv-form', [TvSeriesController::class, 'nextontvform'])->name('nextontvform');
Route::get('select-date', [TvSeriesController::class, 'selectDate'])->name('selectdate');
Route::post('tv-series-by-date', [TvSeriesController::class, 'tvseriesbydate'])->name('tvseriesbydate');

Route::get('asobject', [AbTestController::class, 'index'])->name('asobject');
Route::get('asarray', [AbTestController::class, 'asarray'])->name('asarray');
Route::get('asjson', [AbTestController::class, 'asjson'])->name('asjson');
Route::get('expanded', [AbTestController::class, 'expanded'])->name('expanded');

require __DIR__.'/auth.php';

