<?php

namespace App\Models\SMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'sms_questions';

    protected $fillable = ['sms_level_id', 'question_text'];

    /**
     * Get the email level that owns the question.
     */
    public function emailLevel()
    {
        return $this->belongsTo(Level::class, 'sms_level_id');
    }

    /**
     * Get the responses for the question.
     */
    public function responses()
    {
        return $this->hasMany(Response::class, 'sms_question_id');
    }
}
