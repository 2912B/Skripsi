<?php

namespace App\Models\Trivia;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'trivia_choices';

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}

