<?php

// Controller
use App\Http\Controllers\SubmissionController;

// Route
use Illuminate\Support\Facades\Route;


// Routes for skripsi.test
Route::domain('skripsi.test')->group(function () {
    Route::get('/submission', [SubmissionController::class, 'create'])->middleware('verified')->name('submissions.create');

    Route::post('/submission', [SubmissionController::class, 'store'])->middleware('verified')->name('submissions.store');

    Route::get('/subtracker', [SubmissionController::class, 'index'])->middleware('verified')->name('submissions.index');
});
