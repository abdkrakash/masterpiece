<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarImage;
use App\Models\Car;

class CarImageSeeder extends Seeder
{
    public function run()
    {
        // Get all cars
        $cars = Car::all();

        // Loop through each car and add images
        foreach ($cars as $car) {
            CarImage::create([
                'Cars_id' => $car->id,
                'images_path' => 'images/cars/' . strtolower(str_replace(' ', '-', $car->Cars_name)) . '-1.jpg',
            ]);

            CarImage::create([
                'Cars_id' => $car->id,
                'images_path' => 'images/cars/' . strtolower(str_replace(' ', '-', $car->Cars_name)) . '-2.jpg',
            ]);
        }
    }
}
