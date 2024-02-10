<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Exception;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cat_result = DB::select('SELECT category_id FROM domain_categories ORDER BY RAND() LIMIT 1');

        if (!empty($cat_result)) {
            $cat_id = $cat_result[0]->category_id;
        } else {
            throw new Exception('No category found', 404);
        }

        return [
            'cat_id' => $cat_id,
            'name' => fake()->word(),
            'points' => fake()->numberBetween(1, 50),
        ];
    }
}
