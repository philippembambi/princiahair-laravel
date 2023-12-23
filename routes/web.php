<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\PageController as AdminPageController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;

Route::get('/', PageController::class)->name("");
Route::get('index', PageController::class)->name("index");
Route::get('product', ProductController::class)->name("product");

Route::get('login', [PageController::class, 'authUser'])->name("login");
Route::post('login', [UserController::class, 'login'])->name("login");
Route::get('logout', [UserController::class, 'logout'])->name("logout");

Route::middleware(['auth'])->group(function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('home', [AdminPageController::class, 'index'])->name("home");
       
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('add', [AdminCategoryController::class, 'create'])->name("add");
            Route::post('add', [AdminCategoryController::class, 'store'])->name("add");
            Route::get('all', [AdminCategoryController::class, 'index'])->name("all");
        });

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('add', [AdminProductController::class, 'create'])->name("add");
            Route::post('add', [AdminProductController::class, 'store'])->name("add");
            Route::get('all', [AdminProductController::class, 'index'])->name("all");
            Route::get('loadFile', [AdminProductController::class, 'loadFile'])->name("loadFile");
        });

    });    
});
