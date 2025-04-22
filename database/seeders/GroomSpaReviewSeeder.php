<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroomSpaReview;
use App\Models\GroomSpa;

class GroomSpaReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all spa services
        $spas = GroomSpa::all();

        // Loop through each spa service and add reviews
        foreach ($spas as $spa) {
            GroomSpaReview::create([
                'id_groom_spa' => $spa->id,
                'users_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'spa_reviews_comment' => 'This spa service was amazing! Highly recommend it.',
                'spa_reviews_rating' => rand(4, 5),
            ]);

            GroomSpaReview::create([
                'id_groom_spa' => $spa->id,
                'users_id' => rand(1, 5),
                'spa_reviews_comment' => 'Great service and relaxing experience!',
                'spa_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
