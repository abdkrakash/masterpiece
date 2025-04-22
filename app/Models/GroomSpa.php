<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomSpa extends Model
{
    use HasFactory;

    protected $table = 'groom_spa'; // Explicitly specify the table name

    protected $fillable = [
        'spa_name',
        'spa_description',
        'spa_price',
        'spa_duration',
        'spa_services_provided',
        'spa_availability',
    ];

    // Relationship with images
    public function images()
    {
        return $this->hasMany(GroomSpaImage::class, 'id_groom_spa');
    }

    // Relationship with reviews
    public function reviews()
    {
        return $this->hasMany(GroomSpaReview::class, 'id_groom_spa');
    }
}
