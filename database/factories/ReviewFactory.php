<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'review' => fake()->paragraphs(1, true),
            'rating' => random_int(1,5),
            'status' => random_int(1,5),
            'model_type' => User::class,
            'model_id' => User::all()->random()->id,
        ];
    }
}
