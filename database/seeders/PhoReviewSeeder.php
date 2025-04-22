<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhoReview;
use App\Models\Photography;

class PhoReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all photography services
        $photographies = Photography::all();

        // Loop through each photography service and add reviews
        foreach ($photographies as $photography) {
            PhoReview::create([
                'photography_id' => $photography->id,
                'user_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'pho_reviews_comment' => 'Great service! Highly recommend this photographer.',
                'pho_reviews_rating' => rand(4, 5),
            ]);

            PhoReview::create([
                'photography_id' => $photography->id,
                'user_id' => rand(1, 5),
                'pho_reviews_comment' => 'The photos turned out amazing! Will hire again.',
                'pho_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
