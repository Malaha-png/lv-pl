<?php

namespace Database\Factories;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fio' => $this->faker->name,
            'post' => Str::random(10),
            'salary' => rand(1000, 10000),
            'director' => rand(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
