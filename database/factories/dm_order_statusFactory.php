<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class dm_order_statusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(7),
            'status'      => $this->faker->boolean()
        ];
    }
}
