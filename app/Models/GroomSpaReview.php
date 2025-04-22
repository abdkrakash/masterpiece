<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomSpaReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_groom_spa',
        'users_id',
        'spa_reviews_comment',
        'spa_reviews_rating',
    ];

    // Relationship with groom_spa
    public function spa()
    {
        return $this->belongsTo(GroomSpa::class, 'id_groom_spa');
    }

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
