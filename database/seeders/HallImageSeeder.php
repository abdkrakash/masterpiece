<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HallImage;
use App\Models\WeddingHall;

class HallImageSeeder extends Seeder
{
    public function run()
    {
        // Get all wedding halls
        $weddingHalls = WeddingHall::all();

        // Loop through each wedding hall and add images
        foreach ($weddingHalls as $hall) {
            HallImage::create([
                'hall_id' => $hall->id,
                'image_path' => 'images/wedding_halls/' . strtolower(str_replace(' ', '-', $hall->hall_name)) . '-1.jpg',
            ]);

            HallImage::create([
                'hall_id' => $hall->id,
                'image_path' => 'images/wedding_halls/' . strtolower(str_replace(' ', '-', $hall->hall_name)) . '-2.jpg',
            ]);
        }
    }
}
