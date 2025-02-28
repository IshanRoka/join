<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    public function run(): void
    {
        Order::insert([
            ['user_id' => 1, 'total_amount' => 1500.00],
            ['user_id' => 2, 'total_amount' => 800.00],
            ['user_id' => 3, 'total_amount' => 100.00],
        ]);
    }
}