<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeddingCake;

class WeddingCakeSeeder extends Seeder
{
    public function run()
    {
        // Insert sample wedding cakes
        WeddingCake::create([
            'cake_name' => 'Classic Vanilla Cake',
            'cake_description' => 'A timeless classic with vanilla flavor.',
            'cake_price' => 150.00,
            'cake_servings' => 10,
            'cake_flavor' => 'Vanilla',
            'cake_size' => 'Small',
            'cake_availability' => true,
        ]);

        WeddingCake::create([
            'cake_name' => 'Chocolate Fudge Cake',
            'cake_description' => 'Rich and decadent chocolate fudge cake.',
            'cake_price' => 200.00,
            'cake_servings' => 20,
            'cake_flavor' => 'Chocolate',
            'cake_size' => 'Medium',
            'cake_availability' => true,
        ]);

        WeddingCake::create([
            'cake_name' => 'Strawberry Shortcake',
            'cake_description' => 'Light and fluffy strawberry shortcake.',
            'cake_price' => 180.00,
            'cake_servings' => 15,
            'cake_flavor' => 'Strawberry',
            'cake_size' => 'Large',
            'cake_availability' => false,
        ]);
    }
}
