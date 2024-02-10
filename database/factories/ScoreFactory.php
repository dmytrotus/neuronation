<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Session;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sid' => Session::factory(),
            'uid' => User::factory(),
            'score' => fake()->numberBetween(1, 700),
            'score_normalized' => fake()->numberBetween(1, 700),
            'start_difficulty' => fake()->numberBetween(1, 700),
            'end_difficulty' => fake()->numberBetween(1, 700),
        ];
    }
}
