<?php

namespace App\Models\Email;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'email_responses';

    protected $fillable = ['email_question_id', 'response_type', 'reason', 'is_correct'];

    /**
     * Get the email question that owns the response.
     */
    public function emailQuestion()
    {
        return $this->belongsTo(Question::class, 'email_question_id');
    }
}
