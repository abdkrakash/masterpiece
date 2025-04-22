<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photography;

class PhotographySeeder extends Seeder
{
    public function run()
    {
        // Insert sample photography services
        Photography::create([
            'pho_name' => 'Wedding Photography',
            'pho_description' => 'Capture your special day with professional wedding photography.',
            'pho_price' => 500.00,
            'pho_duration' => 6,
            'pho_location' => 'New York, NY',
            'pho_availability' => true,
        ]);

        Photography::create([
            'pho_name' => 'Portrait Photography',
            'pho_description' => 'Professional portrait sessions for individuals and families.',
            'pho_price' => 300.00,
            'pho_duration' => 2,
            'pho_location' => 'Los Angeles, CA',
            'pho_availability' => true,
        ]);

        Photography::create([
            'pho_name' => 'Event Photography',
            'pho_description' => 'Photography services for corporate events, parties, and gatherings.',
            'pho_price' => 400.00,
            'pho_duration' => 4,
            'pho_location' => 'Chicago, IL',
            'pho_availability' => false,
        ]);
    }
}
