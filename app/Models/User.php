<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // الكلاس الأساسي للمصادقة
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // الوراثة من Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}