<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingCakeReview extends Model
{
    use HasFactory;

    protected $table = 'wedding_cakes_reviews'; // Explicitly specify the table name

    protected $fillable = [
        'wedding_cake_id',
        'user_id',
        'cakes_reviews_comment',
        'cakes_reviews_rating',
    ];

    // Relationship with wedding cakes
    public function cake()
    {
        return $this->belongsTo(WeddingCake::class, 'wedding_cake_id');
    }

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
