<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BgaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'bga_id',
        'image_path',
    ];

    // Relationship with bridal_groom_attire
    public function attire()
    {
        return $this->belongsTo(BridalGroomAttire::class, 'bga_id');
    }
}
