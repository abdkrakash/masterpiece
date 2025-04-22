<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Insert sample users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Bob Brown',
            'email' => 'bob@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Charlie Davis',
            'email' => 'charlie@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
