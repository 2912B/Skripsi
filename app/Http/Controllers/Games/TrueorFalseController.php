<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use App\Models\TrueOrFalse\Category;
use App\Models\TrueOrFalse\Question;
use App\Models\TrueOrFalse\Choice;
use Illuminate\Http\Request;

class TrueorFalseController extends Controller
{
    public function showCategoryQuestions($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        $questions = Question::with('choices')
                    ->where('category_id', $category->id)
                    ->get();

        return view('games.trueorfalse.trueorfalse', compact('category', 'questions'));
    }

    public function showResults($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        return view('games.trueorfalse.results', compact('category'));
    }
}
