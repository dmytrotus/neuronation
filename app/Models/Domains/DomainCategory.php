<?php

namespace App\Models\Domains;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Exercise;

class DomainCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class, 'cat_id', 'category_id');
    }
}
