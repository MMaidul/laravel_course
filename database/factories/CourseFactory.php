<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Facade;

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
    public function definition()
    {
        return [
            'name' => fake()->sentence,
            'book' => rand(0, 1),
            'price' => rand(0, 1) ? rand(0, 1) : 0.0,
            'year' => rand(2010, 2021),
            'image' => fake()->imageUrl(),
            'description' => fake()->paragraph,
            'link' => fake()->url(),
            'submitted_by' => User::all()->random()->id,
            'duration' => rand(0, 2),
            'platform_id' => Platform::all()->random()->id,
        ];
    }
}
