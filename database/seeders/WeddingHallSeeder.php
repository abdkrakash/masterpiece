<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeddingHall;

class WeddingHallSeeder extends Seeder
{
    public function run()
    {
        // Insert sample wedding halls
        WeddingHall::create([
            'hall_name' => 'Grand Ballroom',
            'hall_location' => 'New York, NY',
            'hall_phone_number' => '+1234567890',
            'hall_description' => 'A luxurious venue perfect for hosting weddings and large events.',
            'hall_price' => 1000.00,
            'hall_capacity' => 300,
            'hall_availability' => true,
        ]);

        WeddingHall::create([
            'hall_name' => 'Ocean View Hall',
            'hall_location' => 'Los Angeles, CA',
            'hall_phone_number' => '+0987654321',
            'hall_description' => 'A scenic venue with stunning ocean views for intimate weddings.',
            'hall_price' => 750.00,
            'hall_capacity' => 150,
            'hall_availability' => true,
        ]);

        WeddingHall::create([
            'hall_name' => 'Royal Banquet Hall',
            'hall_location' => 'Chicago, IL',
            'hall_phone_number' => '+1122334455',
            'hall_description' => 'An elegant banquet hall ideal for traditional and modern weddings.',
            'hall_price' => 1200.00,
            'hall_capacity' => 500,
            'hall_availability' => false,
        ]);
    }
}
