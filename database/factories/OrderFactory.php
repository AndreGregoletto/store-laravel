<?php

namespace Database\Factories;

use App\Models\dm_order_status;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId    = User::pluck('id')->toArray();
        $product   = Product::pluck('id')->toArray();
        $status    = dm_order_status::pluck('id');
      
        return [
            'user_id'    => $this->faker->randomElement($userId),
            'product_id' => $this->faker->randomElement($product),
            'dtOrder'    => $this->faker->date('Y-m-d', 'now'),
            'quantity'   => $this->faker->numberBetween(0, 1000),
            'status_id'  => $this->faker->randomElement($status)
        ];
    }
}
