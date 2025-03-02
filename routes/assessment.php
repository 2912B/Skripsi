<?php

// Controller
use App\Http\Controllers\Test\PreTestController;
use App\Http\Controllers\Test\PostTestController;

// Route
use Illuminate\Support\Facades\Route;


// Pre-Test Assessment
Route::get('/assessment/pretest', [PreTestController::class, 'showPreTest'])->name('assessment.pretest');
Route::get('/assessment/preresult', [PreTestController::class, 'showResults'])->name('assessment.pretestresult');
Route::post('/assessment/pretest/complete', [PreTestController::class, 'completePreTest'])->name('assessment.pretest.complete');

// Post-Test Assessment
Route::get('/assessment/posttest', [PostTestController::class, 'showPostTest'])->name('assessment.posttest');
Route::get('/assessment/postresult', [PostTestController::class, 'showResults'])->name('assessment.posttestresult');
Route::post('/assessment/posttest/complete', [PostTestController::class, 'completePostTest'])->name('assessment.posttest.complete');
