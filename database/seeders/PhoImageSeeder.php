<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhoImage;
use App\Models\Photography;

class PhoImageSeeder extends Seeder
{
    public function run()
    {
        // Get all photography services
        $photographies = Photography::all();

        // Loop through each photography service and add images
        foreach ($photographies as $photography) {
            PhoImage::create([
                'photography_id' => $photography->id,
                'images_path' => 'images/photography/' . strtolower(str_replace(' ', '-', $photography->pho_name)) . '-1.jpg',
            ]);

            PhoImage::create([
                'photography_id' => $photography->id,
                'images_path' => 'images/photography/' . strtolower(str_replace(' ', '-', $photography->pho_name)) . '-2.jpg',
            ]);
        }
    }
}
