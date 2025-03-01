<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use App\Models\BestScenario\Category;
use App\Models\BestScenario\Question;
use App\Models\BestScenario\Choice;
use Illuminate\Http\Request;

class BestScenarioController extends Controller
{
    public function showCategoryQuestions($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $questions = Question::with('choices')
                    ->where('category_id', $category->id)
                    ->get();
        return view('games.bestscenario.bestscenario', compact('category', 'questions'));
    }

    public function showResults($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        return view('games.bestscenario.results', compact('category'));
    }
}
