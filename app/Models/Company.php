<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'industry',
        'address',
    ];

    public function jobApplicants(): HasMany
    {
        return $this->hasMany(JobApplicant::class);
    }
}

