<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function score(): BelongsTo
    {
        return $this->belongsTo(Score::class, 'session_id', 'sid');
    }
}
