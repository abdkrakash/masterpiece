<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarReview extends Model
{
    use HasFactory;

    protected $table = 'cars_reviews'; // Explicitly specify the table name

    protected $fillable = [
        'Cars_id',
        'users_id',
        'wedding_cars_reviews_comment',
        'wedding_cars_reviews_rating',
    ];

    // Relationship with cars
    public function car()
    {
        return $this->belongsTo(Car::class, 'Cars_id');
    }

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
