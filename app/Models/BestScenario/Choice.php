<?php

namespace App\Models\BestScenario;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'bestscenario_choices';

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}

