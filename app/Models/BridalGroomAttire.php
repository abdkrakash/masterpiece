<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalGroomAttire extends Model
{
    use HasFactory;

    protected $table = 'bridal_groom_attire'; // Explicitly specify the table name

    protected $fillable = [
        'bga_name',
        'bga_description',
        'bga_price',
        'bga_size',
        'bga_color',
        'bga_availability',
    ];

    // Relationship with images
    public function images()
    {
        return $this->hasMany(BgaImage::class, 'bga_id');
    }

    // Relationship with reviews
    public function reviews()
    {
        return $this->hasMany(BgaReview::class, 'bga_id');
    }
}
