<?php

namespace App\Models\PostTestAssessment;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'posttest_choices';
    protected $fillable = [
        'choice_text',
        'is_correct',
        'assessment_question_id',
    ];

    /**
     * Define the relationship with PretestAssessment.
     */
    public function question()
    {
        return $this->belongsTo(Question::class, 'assessment_question_id');
    }
}
