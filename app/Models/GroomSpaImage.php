<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomSpaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_groom_spa',
        'image_path',
    ];

    // Relationship with groom_spa
    public function spa()
    {
        return $this->belongsTo(GroomSpa::class, 'id_groom_spa');
    }
}
