<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barangay>
     */
    class BarangayFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'id'         => uuid(),
                'brgy_name'  => $this->faker->streetName,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
