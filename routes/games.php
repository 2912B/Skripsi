<?php

// Controller
use App\Http\Controllers\Games\BestScenarioController;
use App\Http\Controllers\Games\TriviaController;
use App\Http\Controllers\Games\TrueorFalseController;

// Route
use Illuminate\Support\Facades\Route;



// Games Dashboard
Route::get('/games/trivia', function () {
    return view('games.trivia.triviadashboard');
});

Route::get('/games/trueorfalse', function () {
    return view('games.trueorfalse.trueorfalsedashboard');
});

Route::get('/games/bestscenario', function () {
    return view('games.bestscenario.bestscenariodashboard');
});

// Trivia Routes
Route::get('/games/trivia/{categoryName}', [TriviaController::class, 'showCategoryQuestions']);
Route::get('/games/trivia/{categoryName}/result', [TriviaController::class, 'showResults'])->name('trivia.result');

// True or False Routes
Route::get('/games/trueorfalse/{categoryName}', [TrueorFalseController::class, 'showCategoryQuestions']);
Route::get('/games/trueorfalse/{categoryName}/result', [TrueorFalseController::class, 'showResults'])->name('trueorfalse.result');

// Best Scenario Routes
Route::get('/games/bestscenario/{categoryName}', [BestScenarioController::class, 'showCategoryQuestions']);
Route::get('/games/bestscenario/{categoryName}/result', [BestScenarioController::class, 'showResults'])->name('bestscenario.result');

