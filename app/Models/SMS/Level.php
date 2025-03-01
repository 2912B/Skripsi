<?php

namespace App\Models\SMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'sms_levels';

    protected $fillable = ['name', 'description'];

    /**
     * Get the questions for the email level.
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'sms_level_id');
    }
}
