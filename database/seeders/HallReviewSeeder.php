<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HallReview;
use App\Models\WeddingHall;

class HallReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all wedding halls
        $weddingHalls = WeddingHall::all();

        // Loop through each wedding hall and add reviews
        foreach ($weddingHalls as $hall) {
            HallReview::create([
                'hall_id' => $hall->id,
                'user_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'hall_reviews_comment' => 'The venue was beautiful and well-maintained!',
                'hall_reviews_rating' => rand(4, 5),
            ]);

            HallReview::create([
                'hall_id' => $hall->id,
                'user_id' => rand(1, 5),
                'hall_reviews_comment' => 'Great service and amazing ambiance!',
                'hall_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
