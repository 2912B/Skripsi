<?php

namespace App\Models\BestScenario;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'bestscenario_categories';

    public function questions()
    {
        return $this->hasMany(Question::class, 'category_id');
    }
}

