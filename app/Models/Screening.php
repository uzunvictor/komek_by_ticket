<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Screening extends Model
{
    protected $fillable = ['hall_id', 'type_id'];
    protected $hidden = ['pivot'];

    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class);
    }
}
