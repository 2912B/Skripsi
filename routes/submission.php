<?php

// Controller
use App\Http\Controllers\SubmissionController;

// Route
use Illuminate\Support\Facades\Route;


Route::get('/submission', [SubmissionController::class, 'create'])->name('submissions.create');

Route::post('/submission', [SubmissionController::class, 'store'])->name('submissions.store');

Route::get('/subtracker', [SubmissionController::class, 'index'])->name('submissions.index');
