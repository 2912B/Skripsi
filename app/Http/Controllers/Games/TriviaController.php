<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use App\Models\Trivia\Category;
use App\Models\Trivia\Question;
use App\Models\Trivia\Choice;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function showCategoryQuestions($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        $questions = Question::with('choices')
                    ->where('category_id', $category->id)
                    ->get();

        return view('games.trivia.trivia', compact('category', 'questions'));
    }

    public function showResults($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        return view('games.trivia.results', compact('category'));
    }
}


