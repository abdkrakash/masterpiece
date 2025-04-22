<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;

    protected $table = 'cars_images'; // Explicitly specify the table name

    protected $fillable = [
        'Cars_id',
        'images_path',
    ];

    // Relationship with cars
    public function car()
    {
        return $this->belongsTo(Car::class, 'Cars_id');
    }
}
