<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MortgageProgram>
 */
class MortgageProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->sentence(),
            "interest_rate" => $this->faker->randomFloat(2, 9, 20),
            "max_term" => $this->faker->randomFloat(0, 20, 30),
            "min_down_payment" => $this->faker->randomFloat(0, 15, 30),
        ];
    }
}
