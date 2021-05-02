<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 1000) as $index) {
            DB::table('personal')->insert([
                'fio' => $faker->name(),
                'post' => $faker->word(),
                'salary' => rand(1000, 10000),
                'director' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
