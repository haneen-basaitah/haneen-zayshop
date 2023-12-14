<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
//========================================
// =============Dashboard=================
//========================================
Route::prefix('dashboard-panel')->middleware(['auth','checkAdmin'])->name('dashboard.')->group(function(){

    Route::get('/',[DashboardController::class,'index'])->name('index');
   
});














//===================preeze package===================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






?>