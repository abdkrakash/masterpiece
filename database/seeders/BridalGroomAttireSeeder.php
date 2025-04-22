<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BridalGroomAttire;

class BridalGroomAttireSeeder extends Seeder
{
    public function run()
    {
        // Insert sample bridal/groom attire items
        BridalGroomAttire::create([
            'bga_name' => 'White Wedding Dress',
            'bga_description' => 'Elegant white wedding dress with lace detailing.',
            'bga_price' => 500.00,
            'bga_size' => 'Medium',
            'bga_color' => 'White',
            'bga_availability' => true,
        ]);

        BridalGroomAttire::create([
            'bga_name' => 'Tuxedo Suit',
            'bga_description' => 'Classic black tuxedo suit for grooms.',
            'bga_price' => 300.00,
            'bga_size' => 'Large',
            'bga_color' => 'Black',
            'bga_availability' => true,
        ]);

        BridalGroomAttire::create([
            'bga_name' => 'Bridal Veil',
            'bga_description' => 'Delicate veil with floral embroidery.',
            'bga_price' => 100.00,
            'bga_size' => 'One Size Fits All',
            'bga_color' => 'Ivory',
            'bga_availability' => false,
        ]);
    }
}
