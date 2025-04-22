<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BgaReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'bga_id',
        'users_id',
        'bga_reviews_comment',
        'bga_reviews_rating',
    ];

    // Relationship with bridal_groom_attire
    public function attire()
    {
        return $this->belongsTo(BridalGroomAttire::class, 'bga_id');
    }

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
