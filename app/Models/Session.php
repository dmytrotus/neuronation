<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'timestamp' => 'datetime',
    ];

    public function getTimestampAttribute($value)
    {
        return strtotime($value);
    }

    public function score(): BelongsTo
    {
        return $this->belongsTo(Score::class, 'session_id', 'sid');
    }
}
