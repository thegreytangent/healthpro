<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IllnessCategory>
 */
class IllnessCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'            => uuid(),
            'category_name' => $this->faker->safeColorName,
            'created_at'    => now(),
            'updated_at'    => now(),
        ];
    }
}
