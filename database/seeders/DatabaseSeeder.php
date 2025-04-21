<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
           userSeeder::class,
            PhotographySeeder::class,
            PhoImageSeeder::class,
            PhoReviewSeeder::class,
            //
            WeddingHallSeeder::class,
            HallImageSeeder::class,
            HallReviewSeeder::class,
            //
            WeddingCakeSeeder::class,
            WeddingCakeImageSeeder::class,
            WeddingCakeReviewSeeder::class,
            //
            CarSeeder::class,
            CarImageSeeder::class,
            CarReviewSeeder::class,
            //
            BridalGroomAttireSeeder::class,
            BgaImageSeeder::class,
            BgaReviewSeeder::class,
            //
            GroomSpaSeeder::class,
            GroomSpaImageSeeder::class,
            GroomSpaReviewSeeder::class,
            //
            OrderSeeder::class,
        ]);
    }
}
