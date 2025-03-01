<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTest extends Model
{
    protected $table = 'posttest';

    protected $fillable = [
        'user_id',
        'attempt_count',
        'score',
        'cooldown_until',
        'taken_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
