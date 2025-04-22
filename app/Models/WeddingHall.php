<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeddingHall extends Model
{
    use HasFactory;
    protected $fillable =[];
    // app/Models/WeddingHall.php
    public function images(): HasMany
    {
        return $this->hasMany(HallImage::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(HallReview::class);
    }
}
