<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroomSpaImage;
use App\Models\GroomSpa;

class GroomSpaImageSeeder extends Seeder
{
    public function run()
    {
        // Get all spa services
        $spas = GroomSpa::all();

        // Loop through each spa service and add images
        foreach ($spas as $spa) {
            GroomSpaImage::create([
                'id_groom_spa' => $spa->id,
                'image_path' => 'images/groom-spa/' . strtolower(str_replace(' ', '-', $spa->spa_name)) . '-1.jpg',
            ]);

            GroomSpaImage::create([
                'id_groom_spa' => $spa->id,
                'image_path' => 'images/groom-spa/' . strtolower(str_replace(' ', '-', $spa->spa_name)) . '-2.jpg',
            ]);
        }
    }
}
