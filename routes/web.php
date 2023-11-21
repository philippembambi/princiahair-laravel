<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\admin\PageController as AdminPageController;
use App\Http\Controllers\admin\ProductController as AdminProductController;

Route::get('/', PageController::class)->name("");
Route::get('index', PageController::class)->name("index");
Route::get('product', ProductController::class)->name("product");

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminPageController::class, 'index'])->name("dashboard");
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('add', [AdminProductController::class, 'index'])->name("add");
    });
});
