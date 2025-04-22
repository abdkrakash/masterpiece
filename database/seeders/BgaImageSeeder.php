<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BgaImage;
use App\Models\BridalGroomAttire;

class BgaImageSeeder extends Seeder
{
    public function run()
    {
        // Get all bridal/groom attire items
        $attires = BridalGroomAttire::all();

        // Loop through each attire item and add images
        foreach ($attires as $attire) {
            BgaImage::create([
                'bga_id' => $attire->id,
                'image_path' => 'images/bridal-groom-attire/' . strtolower(str_replace(' ', '-', $attire->bga_name)) . '-1.jpg',
            ]);

            BgaImage::create([
                'bga_id' => $attire->id,
                'image_path' => 'images/bridal-groom-attire/' . strtolower(str_replace(' ', '-', $attire->bga_name)) . '-2.jpg',
            ]);
        }
    }
}
