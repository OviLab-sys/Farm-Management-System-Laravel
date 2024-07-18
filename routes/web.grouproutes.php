<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\SearchController;




Route::group(['prefix' => 'crop-categories'], function() {
    Route::get('/', [CropCategoriesController::class, 'index'])->name('crop-categories.index');
    Route::get('create', [CropCategoriesController::class, 'create'])->name('crop-categories.create');
    Route::post('/', [CropCategoriesController::class, 'store'])->name('crop-categories.store');
    Route::get('{cropCategory}', [CropCategoriesController::class, 'show'])->name('crop-categories.show');
    Route::get('{cropCategory}/edit', [CropCategoriesController::class, 'edit'])->name('crop-categories.edit');
    Route::put('{cropCategory}', [CropCategoriesController::class, 'update'])->name('crop-categories.update');
    Route::delete('{cropCategory}', [CropCategoriesController::class, 'destroy'])->name('crop-categories.destroy');
});

Route::group(['prefix' => 'crops'], function() {
    Route::get('/', [CropsController::class, 'index'])->name('crops.index');
    Route::get('create', [CropsController::class, 'create'])->name('crops.create');
    Route::post('/', [CropsController::class, 'store'])->name('crops.store');
    Route::get('{crop}', [CropsController::class, 'show'])->name('crops.show');
    Route::get('{crop}/edit', [CropsController::class, 'edit'])->name('crops.edit');
    Route::put('{crop}', [CropsController::class, 'update'])->name('crops.update');
    Route::delete('{crop}', [CropsController::class, 'destroy'])->name('crops.destroy');
});

Route::group(['prefix' => 'customers'], function() {
    Route::get('/', [CustomersController::class, 'index'])->name('customers.index');
    Route::get('create', [CustomersController::class, 'create'])->name('customers.create');
    Route::post('/', [CustomersController::class, 'store'])->name('customers.store');
    Route::get('{customer}', [CustomersController::class, 'show'])->name('customers.show');
    Route::get('{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
    Route::put('{customer}', [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy');
});

Route::group(['prefix' => 'expenses'], function() {
    Route::get('/', [ExpensesController::class, 'index'])->name('expenses.index');
    Route::get('create', [ExpensesController::class, 'create'])->name('expenses.create');
    Route::post('/', [ExpensesController::class, 'store'])->name('expenses.store');
    Route::get('{expense}', [ExpensesController::class, 'show'])->name('expenses.show');
    Route::get('{expense}/edit', [ExpensesController::class, 'edit'])->name('expenses.edit');
    Route::put('{expense}', [ExpensesController::class, 'update'])->name('expenses.update');
    Route::delete('{expense}', [ExpensesController::class, 'destroy'])->name('expenses.destroy');
});

Route::group(['prefix' => 'fertilizer-applications'], function() {
    Route::get('/', [FertilizerApplicationsController::class, 'index'])->name('fertilizer-applications.index');
    Route::get('create', [FertilizerApplicationsController::class, 'create'])->name('fertilizer-applications.create');
    Route::post('/', [FertilizerApplicationsController::class, 'store'])->name('fertilizer-applications.store');
    Route::get('{fertilizerApplication}', [FertilizerApplicationsController::class, 'show'])->name('fertilizer-applications.show');
    Route::get('{fertilizerApplication}/edit', [FertilizerApplicationsController::class, 'edit'])->name('fertilizer-applications.edit');
    Route::put('{fertilizerApplication}', [FertilizerApplicationsController::class, 'update'])->name('fertilizer-applications.update');
    Route::delete('{fertilizerApplication}', [FertilizerApplicationsController::class, 'destroy'])->name('fertilizer-applications.destroy');
});

Route::group(['prefix' => 'harvests'], function() {
    Route::get('/', [HarvestsController::class, 'index'])->name('harvests.index');
    Route::get('create', [HarvestsController::class, 'create'])->name('harvests.create');
    Route::post('/', [HarvestsController::class, 'store'])->name('harvests.store');
    Route::get('{harvest}', [HarvestsController::class, 'show'])->name('harvests.show');
    Route::get('{harvest}/edit', [HarvestsController::class, 'edit'])->name('harvests.edit');
    Route::put('{harvest}', [HarvestsController::class, 'update'])->name('harvests.update');
    Route::delete('{harvest}', [HarvestsController::class, 'destroy'])->name('harvests.destroy');
});

Route::group(['prefix' => 'pesticide-applications'], function() {
    Route::get('/', [PesticideApplicationsController::class, 'index'])->name('pesticide-applications.index');
    Route::get('create', [PesticideApplicationsController::class, 'create'])->name('pesticide-applications.create');
    Route::post('/', [PesticideApplicationsController::class, 'store'])->name('pesticide-applications.store');
    Route::get('{pesticideApplication}', [PesticideApplicationsController::class, 'show'])->name('pesticide-applications.show');
    Route::get('{pesticideApplication}/edit', [PesticideApplicationsController::class, 'edit'])->name('pesticide-applications.edit');
    Route::put('{pesticideApplication}', [PesticideApplicationsController::class, 'update'])->name('pesticide-applications.update');
    Route::delete('{pesticideApplication}', [PesticideApplicationsController::class, 'destroy'])->name('pesticide-applications.destroy');
});

Route::group(['prefix' => 'plantings'], function() {
    Route::get('/', [PlantingsController::class, 'index'])->name('plantings.index');
    Route::get('create', [PlantingsController::class, 'create'])->name('plantings.create');
    Route::post('/', [PlantingsController::class, 'store'])->name('plantings.store');
    Route::get('{planting}', [PlantingsController::class, 'show'])->name('plantings.show');
    Route::get('{planting}/edit', [PlantingsController::class, 'edit'])->name('plantings.edit');
    Route::put('{planting}', [PlantingsController::class, 'update'])->name('plantings.update');
    Route::delete('{planting}', [PlantingsController::class, 'destroy'])->name('plantings.destroy');
});

Route::group(['prefix' => 'purchases'], function() {
    Route::get('/', [PurchasesController::class, 'index'])->name('purchases.index');
    Route::get('create', [PurchasesController::class, 'create'])->name('purchases.create');
    Route::post('/', [PurchasesController::class, 'store'])->name('purchases.store');
    Route::get('{purchase}', [PurchasesController::class, 'show'])->name('purchases.show');
    Route::get('{purchase}/edit', [PurchasesController::class, 'edit'])->name('purchases.edit');
    Route::put('{purchase}', [PurchasesController::class, 'update'])->name('purchases.update');
    Route::delete('{purchase}', [PurchasesController::class, 'destroy'])->name('purchases.destroy');
});

Route::group(['prefix' => 'revenue'], function() {
    Route::get('/', [RevenueController::class, 'index'])->name('revenue.index');
    Route::get('create', [RevenueController::class, 'create'])->name('revenue.create');
    Route::post('/', [RevenueController::class, 'store'])->name('revenue.store');
    Route::get('{revenue}', [RevenueController::class, 'show'])->name('revenue.show');
    Route::get('{revenue}/edit', [RevenueController::class, 'edit'])->name('revenue.edit');
    Route::put('{revenue}', [RevenueController::class, 'update'])->name('revenue.update');
    Route::delete('{revenue}', [RevenueController::class, 'destroy'])->name('revenue.destroy');
});

Route::group(['prefix' => 'sales'], function() {
    Route::get('/', [SalesController::class, 'index'])->name('sales.index');
    Route::get('create', [SalesController::class, 'create'])->name('sales.create');
    Route::post('/', [SalesController::class, 'store'])->name('sales.store');
    Route::get('{sale}', [SalesController::class, 'show'])->name('sales.show');
    Route::get('{sale}/edit', [SalesController::class, 'edit'])->name('sales.edit');
    Route::put('{sale}', [SalesController::class, 'update'])->name('sales.update');
    Route::delete('{sale}', [SalesController::class, 'destroy'])->name('sales.destroy');
});

Route::group(['prefix' => 'stock'], function() {
    Route::get('/', [StockController::class, 'index'])->name('stock.index');
    Route::get('create', [StockController::class, 'create'])->name('stock.create');
    Route::post('/', [StockController::class, 'store'])->name('stock.store');
    Route::get('{stock}', [StockController::class, 'show'])->name('stock.show');
    Route::get('{stock}/edit', [StockController::class, 'edit'])->name('stock.edit');
    Route::put('{stock}', [StockController::class, 'update'])->name('stock.update');
    Route::delete('{stock}', [StockController::class, 'destroy'])->name('stock.destroy');
});

Route::group(['prefix' => 'storage'], function() {
    Route::get('/', [StorageController::class, 'index'])->name('storage.index');
    Route::get('create', [StorageController::class, 'create'])->name('storage.create');
    Route::post('/', [StorageController::class, 'store'])->name('storage.store');
    Route::get('{storage}', [StorageController::class, 'show'])->name('storage.show');
    Route::get('{storage}/edit', [StorageController::class, 'edit'])->name('storage.edit');
    Route::put('{storage}', [StorageController::class, 'update'])->name('storage.update');
    Route::delete('{storage}', [StorageController::class, 'destroy'])->name('storage.destroy');
});

Route::group(['prefix' => 'stored-crops'], function() {
    Route::get('/', [StoredCropsController::class, 'index'])->name('stored-crops.index');
    Route::get('create', [StoredCropsController::class, 'create'])->name('stored-crops.create');
    Route::post('/', [StoredCropsController::class, 'store'])->name('stored-crops.store');
    Route::get('{storedCrop}', [StoredCropsController::class, 'show'])->name('stored-crops.show');
    Route::get('{storedCrop}/edit', [StoredCropsController::class, 'edit'])->name('stored-crops.edit');
    Route::put('{storedCrop}', [StoredCropsController::class, 'update'])->name('stored-crops.update');
    Route::delete('{storedCrop}', [StoredCropsController::class, 'destroy'])->name('stored-crops.destroy');
});

Route::group(['prefix' => 'suppliers'], function() {
    Route::get('/', [SuppliersController::class, 'index'])->name('suppliers.index');
    Route::get('create', [SuppliersController::class, 'create'])->name('suppliers.create');
    Route::post('/', [SuppliersController::class, 'store'])->name('suppliers.store');
    Route::get('{supplier}', [SuppliersController::class, 'show'])->name('suppliers.show');
    Route::get('{supplier}/edit', [SuppliersController::class, 'edit'])->name('suppliers.edit');
    Route::put('{supplier}', [SuppliersController::class, 'update'])->name('suppliers.update');
    Route::delete('{supplier}', [SuppliersController::class, 'destroy'])->name('suppliers.destroy');
});