<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroomSpa;

class GroomSpaSeeder extends Seeder
{
    public function run()
    {
        // Insert sample spa services
        GroomSpa::create([
            'spa_name' => 'Relaxation Massage',
            'spa_description' => 'A soothing massage to relieve stress.',
            'spa_price' => 100.00,
            'spa_duration' => 60,
            'spa_services_provided' => 'Deep tissue massage, hot stone therapy',
            'spa_availability' => true,
        ]);

        GroomSpa::create([
            'spa_name' => 'Steam Room Session',
            'spa_description' => 'Relax in our steam room for a rejuvenating experience.',
            'spa_price' => 50.00,
            'spa_duration' => 30,
            'spa_services_provided' => 'Steam therapy, aromatherapy',
            'spa_availability' => true,
        ]);

        GroomSpa::create([
            'spa_name' => 'Facial Treatment',
            'spa_description' => 'Customized facial treatment for glowing skin.',
            'spa_price' => 150.00,
            'spa_duration' => 45,
            'spa_services_provided' => 'Purifying mask, exfoliation, hydration',
            'spa_availability' => false,
        ]);
    }
}
