<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BgaReview;
use App\Models\BridalGroomAttire;

class BgaReviewSeeder extends Seeder
{
    public function run()
    {
        // Get all bridal/groom attire items
        $attires = BridalGroomAttire::all();

        // Loop through each attire item and add reviews
        foreach ($attires as $attire) {
            BgaReview::create([
                'bga_id' => $attire->id,
                'users_id' => rand(1, 5), // Assuming there are users with IDs 1 to 5 in the database
                'bga_reviews_comment' => 'Absolutely stunning! Perfect for my big day.',
                'bga_reviews_rating' => rand(4, 5),
            ]);

            BgaReview::create([
                'bga_id' => $attire->id,
                'users_id' => rand(1, 5),
                'bga_reviews_comment' => 'High-quality material and excellent fit!',
                'bga_reviews_rating' => rand(3, 5),
            ]);
        }
    }
}
