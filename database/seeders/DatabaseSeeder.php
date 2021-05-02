<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Personal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        // DB::table('personal')->insert([
        //     'fio' => Str::random(10) . ' ' . Str::random(10) . ' ' . Str::random(10),
        //     'post' => Str::random(10),
        //     'salary' => rand(1000, 10000),
        //     'director' => rand(1, 100),
        // ]);
        $this->call([
            // UserSeeder::class,
            PersonalSeeder::class,
            // CommentSeeder::class,
        ]);
    }
}
