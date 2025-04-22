<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Photography extends Model
{
    use HasFactory;
    // app/Models/Photography.php
    use HasFactory;

    // Specify the table name explicitly
    protected $table = 'photography';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'pho_name',
        'pho_description',
        'pho_price',
        'pho_duration',
        'pho_location',
        'pho_availability',
    ];
    public function images(): HasMany
    {
        return $this->hasMany(PhoImage::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(PhoReview::class);
    }
}
