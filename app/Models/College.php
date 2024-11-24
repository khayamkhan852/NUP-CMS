<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class College extends Model
{
    protected $fillable = [
        'code',
        'name',
        'landline_no',
        'principal_name',
        'principal_no',
        'bs_coordinator_name',
        'bs_coordinator_no',
        'focal_person_name',
        'bs_person_no',
        'bs_controller_name',
        'bs_controller_no',
    ];

    public function disciplines(): BelongsToMany
    {
        return $this->belongsToMany(Discipline::class, 'college_discipline');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'college_id');
    }
}
