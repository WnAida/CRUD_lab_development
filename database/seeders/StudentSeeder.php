<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; // Corrected the import

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Corrected the Faker instantiation

        foreach (range(1, 5) as $value) {
            DB::table('students')->insert([
                'FirstName' => $faker->firstName,
                'SecondName' => $faker->lastName,
                'Gender' => $faker->randomElement(['M', 'F']),
                'Address' => $faker->country,
            ]);
        }
    }
}
