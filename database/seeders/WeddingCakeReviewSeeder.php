<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeddingCakeReview;
use App\Models\WeddingCake;

class WeddingCakeReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all wedding cakes
        $weddingCakes = WeddingCake::all();

        // Loop through each wedding cake and add reviews
        foreach ($weddingCakes as $cake) {
            WeddingCakeReview::create([
                'wedding_cake_id' => $cake->id,
                'user_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'cakes_reviews_comment' => 'This cake was absolutely delicious!',
                'cakes_reviews_rating' => rand(4, 5),
            ]);

            WeddingCakeReview::create([
                'wedding_cake_id' => $cake->id,
                'user_id' => rand(1, 5),
                'cakes_reviews_comment' => 'The presentation was stunning!',
                'cakes_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
