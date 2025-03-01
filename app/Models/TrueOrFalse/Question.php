<?php

namespace App\Models\TrueOrFalse;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'trueorfalse_questions';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function choices()
    {
        return $this->hasMany(Choice::class, 'question_id');
    }

    public function pretestQuestion()
    {
        return $this->hasOne(\App\Models\PreTestAssessment\Question::class, 'original_question_id');
    }

    public function posttestQuestion()
    {
        return $this->hasOne(\App\Models\PostTestAssessment\Question::class, 'original_question_id');
    }
}
