<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreTest extends Model
{
    protected $table = 'pre_test';
    protected $fillable = [
        'user_id',
        'has_taken',
        'score',
        'taken_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
