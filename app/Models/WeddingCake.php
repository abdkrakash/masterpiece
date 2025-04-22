<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingCake extends Model
{
    use HasFactory;

    protected $fillable = [
        'cake_name',
        'cake_description',
        'cake_price',
        'cake_servings',
        'cake_flavor',
        'cake_size',
        'cake_availability',
    ];

    // Relationship with images
    public function images()
    {
        return $this->hasMany(WeddingCakeImage::class, 'Cake_id');
    }

    // Relationship with reviews
    public function reviews()
    {
        return $this->hasMany(WeddingCakeReview::class, 'wedding_cake_id');
    }
}
