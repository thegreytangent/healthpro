<?php

    namespace Database\Factories;

    use App\Models\Barangay;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
     */
    class AddressFactory extends Factory
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
                'brgy_id'    => Barangay::factory(),
                'prk'        => $this->faker->streetName,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
