<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cars_name',
        'Cars_description',
        'Car_model',
        'Cars_price',
        'Car_color',
        'Car_rental_duration',
        'Car_availability',
    ];

    // Relationship with images
    public function images()
    {
        return $this->hasMany(CarImage::class, 'Cars_id');
    }

    // Relationship with reviews
    public function reviews()
    {
        return $this->hasMany(CarReview::class, 'Cars_id');
    }
}
