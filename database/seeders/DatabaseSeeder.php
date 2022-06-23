<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\dm_order_status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        Product::factory(100)->create();
        dm_order_status::factory(3)->create();
        Order::factory(200)->create();
    }
}
