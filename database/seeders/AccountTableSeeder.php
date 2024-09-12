<?php
// AccountTableSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccountTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        // Seed Students
        for ($i = 0; $i < 10; $i++) {
            // Insert student data into students table
            $studentId = DB::table('students')->insertGetId([
                'learner_id' => $faker->unique()->numberBetween(1000, 9999),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert corresponding data into account_details for student
            DB::table('account_details')->insert([
                'student_id' => $studentId,
                'name' => $faker->name(),
                'grade_level' => $faker->randomElement(['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4']),
                'phone_number' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed Teachers
        for ($i = 0; $i < 10; $i++) {
            // Insert teacher data into teachers table
            $teacherId = DB::table('teachers')->insertGetId([
                'teacher_id' => $faker->unique()->numberBetween(1000, 9999),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert corresponding data into account_details for teacher
            DB::table('account_details')->insert([
                'teacher_id' => $teacherId,
                'name' => $faker->name(),
                'position' => $faker->jobTitle(),
                'major' => $faker->randomElement(['Mathematics', 'Science', 'English', 'History']),
                'phone_number' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
