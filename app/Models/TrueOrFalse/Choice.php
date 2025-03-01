<?php

namespace App\Models\TrueOrFalse;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'trueorfalse_choices';

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}

