<?php

namespace App\Models\Trivia;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'trivia_categories';

    public function questions()
    {
        return $this->hasMany(Question::class, 'category_id');
    }
}

