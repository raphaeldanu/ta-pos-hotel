<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raphael Adhimas',
            'username' => 'raphaeldanu',
            'password' => bcrypt('123456789'),
            'role' => 'super_admin',
        ]);
    }
}
