<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarReview;
use App\Models\Car;

class CarReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all cars
        $cars = Car::all();

        // Loop through each car and add reviews
        foreach ($cars as $car) {
            CarReview::create([
                'Cars_id' => $car->id,
                'users_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'wedding_cars_reviews_comment' => 'This car was amazing! Highly recommend it.',
                'wedding_cars_reviews_rating' => rand(4, 5),
            ]);

            CarReview::create([
                'Cars_id' => $car->id,
                'users_id' => rand(1, 5),
                'wedding_cars_reviews_comment' => 'Great service and smooth ride!',
                'wedding_cars_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
