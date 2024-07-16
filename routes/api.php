<?php


use App\Http\Controllers\CropCategoriesController;
use App\Http\Controllers\CropsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\FertilizerApplicationsController;
use App\Http\Controllers\HarvestsController;
use App\Http\Controllers\PesticideApplicationsController;
use App\Http\Controllers\PlantingsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\StoredCropsController;
use App\Http\Controllers\SuppliersController;

Route::apiResource('crop-categories', CropCategoriesController::class);
Route::apiResource('crops', CropsController::class);
Route::apiResource('customers', CustomersController::class);
Route::apiResource('expenses', ExpensesController::class);
Route::apiResource('fertilizer-applications', FertilizerApplicationsController::class);
Route::apiResource('harvests', HarvestsController::class);
Route::apiResource('pesticide-applications', PesticideApplicationsController::class);
Route::apiResource('plantings', PlantingsController::class);
Route::apiResource('purchases', PurchasesController::class);
Route::apiResource('revenue', RevenueController::class);
Route::apiResource('sales', SalesController::class);
Route::apiResource('stock', StockController::class);
Route::apiResource('storage', StorageController::class);
Route::apiResource('stored-crops', StoredCropsController::class);
Route::apiResource('suppliers', SuppliersController::class);
