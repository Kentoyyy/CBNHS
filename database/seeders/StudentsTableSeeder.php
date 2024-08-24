<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        $roles = ['student', 'teacher']; // Define roles

        for ($i = 0; $i < 10; $i++) {
            DB::table('account')->insert([
                'learner_id' => $faker->unique()->numberBetween(1000, 9999),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'roles' => $roles[array_rand($roles)], // Random role
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
