<?php

namespace Database\Factories;

use App\Models\Trainor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trainor_id'=>fake()->randomElement(Trainor::pluck('id')),
            'title'=>fake()->word(),
            'description'=>fake()->word()
        ];
    }
}
