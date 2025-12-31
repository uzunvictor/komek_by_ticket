<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    protected $fillable = [
        'title', 'label_id', 'image'
    ];

    public function imagePath(): string
    {
        $image = $this->image ?? 'noimage.svg';
        return '/storage/images/'.$image;
    }

    public function label(): BelongsTo
    {
        return $this->belongsTo(Label::class);
    }

    public function screenings(): BelongsToMany
    {
        return $this->belongsToMany(Screening::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
