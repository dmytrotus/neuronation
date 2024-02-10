<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Domains\DomainCategory;

class Exercise extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'exercise_id';

    public function domainCategory(): BelongsTo
    {
        return $this->belongsTo(DomainCategory::class, 'cat_id', 'category_id');
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_exercise', 'exercise_id', 'course_id');
    }
}
