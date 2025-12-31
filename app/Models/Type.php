<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    protected $fillable = ['title'];

    public function screenings(): HasMany
    {
        return $this->hasMany(Screening::class);
    }
}
