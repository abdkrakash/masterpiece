<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Photography;
use App\Models\Car;
use App\Models\GroomSpa;
use App\Models\WeddingHall;
use App\Models\WeddingCake;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Get all records from related tables
        $users = User::all();
        $photographies = Photography::pluck('id'); // Get only the IDs as a collection
        $cars = Car::pluck('id');
        $groomSpas = GroomSpa::pluck('id');
        $weddingHalls = WeddingHall::pluck('id');
        $weddingCakes = WeddingCake::pluck('id');

        // Loop through each user and create orders
        foreach ($users as $user) {
            for ($i = 0; $i < 5; $i++) { // Create 5 random orders per user
                Order::create([
                    'total_price' => rand(500, 2000), // Random total price between 500 and 2000
                    'Orders_status' => ['pending', 'completed', 'cancelled'][rand(0, 2)], // Random status
                    'users_id' => $user->id,
                    'photography_id' => $photographies->random(), // Randomly pick an ID
                    'Cars_id' => $cars->random(), // Randomly pick an ID
                    'bga_id' => $groomSpas->random(), // Randomly pick an ID
                    'hall_id' => $weddingHalls->random(), // Randomly pick an ID
                    'Cake_id' => $weddingCakes->random(), // Randomly pick an ID
                    'spa_id' => $groomSpas->random(), // Randomly pick an ID
                ]);
            }
        }
    }
}
