<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'user_id',
        'game',
        'category',
        'question',
        'answer',
        'explanation',
        'accepted_date',
        'is_accepted',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
