<?php
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\AdminDashboardController;

use Illuminate\Support\Facades\Route;

// Admin Route
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminController::class, 'login'])->name('alogin');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/submissions/{username}', [AdminDashboardController::class, 'userSubmissions'])->name('admin.submission');
        Route::put('/submissions/{id}', [AdminDashboardController::class, 'update'])->name('admin.submission.update');
        Route::get('/logout', [AdminController::class, 'logout'])->name('alogout');
    });
});
