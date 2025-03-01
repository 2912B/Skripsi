<?php

namespace App\Models\SMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'sms_responses';

    protected $fillable = ['sms_question_id', 'response_type', 'reason', 'is_correct'];

    /**
     * Get the email question that owns the response.
     */
    public function emailQuestion()
    {
        return $this->belongsTo(Question::class, 'sms_question_id');
    }
}
