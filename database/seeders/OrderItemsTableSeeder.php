<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        OrderItem::insert([
            ['order_id' => 1, 'product_id' => 1, 'quantity' => 1, 'price' => 1000.00], // Laptop
            ['order_id' => 1, 'product_id' => 2, 'quantity' => 1, 'price' => 500.00],  // Smartphone
            ['order_id' => 2, 'product_id' => 3, 'quantity' => 2, 'price' => 600.00],  // Tablet (2 qty)
            ['order_id' => 3, 'product_id' => 4, 'quantity' => 1, 'price' => 100.00],  // Headphones
        ]);
    }
}