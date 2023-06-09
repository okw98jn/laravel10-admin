<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest:admins')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

Route::middleware(['web','auth:admins'])->group(function () {
    Route::get('top', [HomeController::class, 'index'])->name('top');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // 管理者
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('show/{id}', [AdminController::class, 'show'])->name('show');
        Route::get('create', [AdminController::class, 'create'])->name('create');
        Route::post('confirm', [AdminController::class, 'confirm'])->name('confirm');
        Route::post('store', [AdminController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('edit_confirm/{id}', [AdminController::class, 'editConfirm'])->name('edit_confirm');
        Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
        Route::post('delete/{id}', [AdminController::class,'delete'])->name('delete');
    });
});
