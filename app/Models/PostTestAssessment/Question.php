<?php

namespace App\Models\PostTestAssessment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $table = 'posttest_questions';
    protected $fillable = [
        'question_text',
        'type',
        'original_question_id',
        'reason',
    ];

    /**
     * Define the relationship with PretestChoice.
     */
    public function choices()
    {
        return $this->hasMany(Choice::class, 'assessment_question_id');
    }

    /**
     * Polymorphic relationship to the original question.
     */
    public function originalQuestion(): BelongsTo|null
    {
        return match ($this->type) {
            'trivia' => $this->belongsTo(\App\Models\Trivia\Question::class, 'original_question_id'),
            'true_or_false' => $this->belongsTo(\App\Models\TrueOrFalse\Question::class, 'original_question_id'),
            'best_scenario' => $this->belongsTo(\App\Models\BestScenario\Question::class, 'original_question_id'),
            default => null, // Optional fallback
        };
    }
}
