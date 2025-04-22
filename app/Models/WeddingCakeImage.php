<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingCakeImage extends Model
{
    use HasFactory;

    protected $table = 'wedding_cakes_images'; // Explicitly specify the table name

    protected $fillable = [
        'Cake_id',
        'image_path',
    ];

    // Relationship with wedding cakes
    public function cake()
    {
        return $this->belongsTo(WeddingCake::class, 'Cake_id');
    }
}
