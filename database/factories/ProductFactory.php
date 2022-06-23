<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'    => $this->faker->text(7),
            'barCode' => $this->faker->numberBetween(1, 999999999),
            'price'   => $this->faker->numberBetween( 50, 5000)
        ];
    }
}
