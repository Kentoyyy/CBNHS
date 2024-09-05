<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StudentsTableSeeder; // Ensure correct import

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(StudentsTableSeeder::class); // Ensure class matches the seeder name
    }
}
