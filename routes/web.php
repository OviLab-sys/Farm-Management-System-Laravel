<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\SuppliersController;
use App\Http\Controllers\web\StoredCropsController;
use App\Http\Controllers\web\StorageController;
use App\Http\Controllers\web\StockController;
use App\Http\Controllers\web\SalesController;
use App\Http\Controllers\web\RevenueController;
use App\Http\Controllers\web\PurchaseController;
use App\Http\Controllers\web\PlantingController;
use App\Http\Controllers\web\PesticideApplicationController;
use App\Http\Controllers\web\HarvestController;
use App\Http\Controllers\web\FertilizerApplicationController;
use App\Http\Controllers\web\ExpenseController;
use App\Http\Controllers\web\CustomerController;
use App\Http\Controllers\web\CropCategoryController;
use App\Http\Controllers\web\CropsController;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('suppliers', SuppliersController::class);
Route::resource('stored_crops', StoredCropsController::class);
Route::resource('storages', StorageController::class);
Route::resource('stocks', StockController::class);
Route::resource('sales', SalesController::class);
Route::resource('revenues', RevenueController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('plantings', PlantingController::class);
Route::resource('pesticide_applications', PesticideApplicationController::class);
Route::resource('harvests', HarvestController::class);
Route::resource('fertilizer_applications', FertilizerApplicationController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('customers', CustomerController::class);
Route::resource('crop_categories', CropCategoryController::class);
Route::resource('crops', CropsController::class);