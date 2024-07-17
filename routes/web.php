<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\StoredCropsController;
use App\Http\Controllers\StorageController;




Route::resource('suppliers', SuppliersController::class);
Route::resource('stored_crops', StoredCropsController::class);
Route::resource('storages', StorageController::class);