<?php

namespace App\Models\Email;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'email_levels';

    protected $fillable = ['name', 'description'];

    /**
     * Get the questions for the email level.
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'email_level_id');
    }
}
