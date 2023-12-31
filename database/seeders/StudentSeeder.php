<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $value) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'department' => $faker->word, // Use a valid Faker method for department
                'email' => $faker->email,
                // 'gender' => $faker->randomElement(['M', 'F']), // Uncomment and use a valid column name
                'phone_number' => $faker->phoneNumber, // Use a valid Faker method for phone number
            ]);
        }
    }
}
