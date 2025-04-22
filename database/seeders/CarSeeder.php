<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Insert sample cars
        Car::create([
            'Cars_name' => 'Toyota Camry',
            'Cars_description' => 'A reliable and comfortable sedan.',
            'Car_model' => 'Camry',
            'Cars_price' => 50.00,
            'Car_color' => 'Blue',
            'Car_rental_duration' => 7,
            'Car_availability' => true,
        ]);

        Car::create([
            'Cars_name' => 'Honda Civic',
            'Cars_description' => 'Eco-friendly and efficient compact car.',
            'Car_model' => 'Civic',
            'Cars_price' => 40.00,
            'Car_color' => 'Red',
            'Car_rental_duration' => 5,
            'Car_availability' => true,
        ]);

        Car::create([
            'Cars_name' => 'Tesla Model S',
            'Cars_description' => 'Luxury electric vehicle with high performance.',
            'Car_model' => 'Model S',
            'Cars_price' => 100.00,
            'Car_color' => 'Black',
            'Car_rental_duration' => 10,
            'Car_availability' => false,
        ]);
    }
}
