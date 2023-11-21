<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/', PageController::class)->name("");
Route::get('index', PageController::class)->name("index");
Route::get('product', ProductController::class)->name("product");