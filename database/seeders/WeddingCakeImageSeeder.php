<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeddingCakeImage;
use App\Models\WeddingCake;

class WeddingCakeImageSeeder extends Seeder
{
    public function run()
    {
        // Get all wedding cakes
        $weddingCakes = WeddingCake::all();

        // Loop through each wedding cake and add images
        foreach ($weddingCakes as $cake) {
            WeddingCakeImage::create([
                'Cake_id' => $cake->id,
                'image_path' => 'images/wedding_cakes/' . strtolower(str_replace(' ', '-', $cake->cake_name)) . '-1.jpg',
            ]);

            WeddingCakeImage::create([
                'Cake_id' => $cake->id,
                'image_path' => 'images/wedding_cakes/' . strtolower(str_replace(' ', '-', $cake->cake_name)) . '-2.jpg',
            ]);
        }
    }
}
