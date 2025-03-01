<?php

// Controller
use App\Http\Controllers\Test\PreTestController;
use App\Http\Controllers\Test\PostTestController;

// Route
use Illuminate\Support\Facades\Route;


// Routes for skripsi.test
Route::domain('skripsi.test')->group(function () {
    // Pre-Test Assessment
    Route::get('/assessment/pretest', [PreTestController::class, 'showPreTest'])->middleware('verified')->name('assessment.pretest');
    Route::get('/assessment/preresult', [PreTestController::class, 'showResults'])->middleware('verified')->name('assessment.pretestresult');
    Route::post('/assessment/pretest/complete', [PreTestController::class, 'completePreTest'])->middleware('verified')->name('assessment.pretest.complete');

    // Post-Test Assessment
    Route::get('/assessment/posttest', [PostTestController::class, 'showPostTest'])->middleware('verified')->name('assessment.posttest');
    Route::get('/assessment/postresult', [PostTestController::class, 'showResults'])->middleware('verified')->name('assessment.posttestresult');
    Route::post('/assessment/posttest/complete', [PostTestController::class, 'completePostTest'])->middleware('verified')->name('assessment.posttest.complete');
});
