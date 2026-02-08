<?php

use App\Http\Controllers\PosController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\RiceTypeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PosController::class, 'index'])->name('pos.index');

Route::resource('units', UnitController::class)->except(['show']);
Route::resource('rice-types', RiceTypeController::class)->except(['show']);
Route::resource('prices', PriceController::class)->except(['show']);
Route::resource('stocks', StockController::class)->only(['index', 'create', 'store']);
