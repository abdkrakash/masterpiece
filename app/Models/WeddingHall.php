<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeddingHall extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images(): HasMany
    {
        return $this->hasMany(HallImage::class, 'hall_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(HallReview::class);
    }
}
