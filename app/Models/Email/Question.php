<?php

namespace App\Models\Email;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'email_questions';

    protected $fillable = ['email_level_id', 'question_text'];

    /**
     * Get the email level that owns the question.
     */
    public function emailLevel()
    {
        return $this->belongsTo(Level::class, 'email_level_id');
    }

    /**
     * Get the responses for the question.
     */
    public function responses()
    {
        return $this->hasMany(Response::class, 'email_question_id');
    }
}
