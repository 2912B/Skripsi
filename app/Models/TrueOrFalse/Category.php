<?php

namespace App\Models\TrueOrFalse;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'trueorfalse_categories';

    public function questions()
    {
        return $this->hasMany(Question::class, 'category_id');
    }
}

