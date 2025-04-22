<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'Orders_status',
        'users_id',
        'photography_id',
        'Cars_id',
        'bga_id',
    ];

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // Relationship with photography
    public function photography()
    {
        return $this->belongsTo(Photography::class, 'photography_id');
    }

    // Relationship with cars
    public function car()
    {
        return $this->belongsTo(Car::class, 'Cars_id');
    }

    // Relationship with groom_spa
    public function groomSpa()
    {
        return $this->belongsTo(GroomSpa::class, 'bga_id');
    }
}
