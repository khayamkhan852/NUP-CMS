<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Discipline extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    public function colleges(): BelongsToMany
    {
        return $this->belongsToMany(College::class, 'college_discipline');
    }
}
