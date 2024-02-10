<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'course_id';

    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class, 'course_exercise', 'course_id', 'exercise_id');
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class, 'course_id', 'course_id');
    }
}
