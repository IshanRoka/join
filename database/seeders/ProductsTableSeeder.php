<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['name' => 'Laptop', 'price' => 1000.00],
            ['name' => 'Smartphone', 'price' => 500.00],
            ['name' => 'Tablet', 'price' => 300.00],
            ['name' => 'Headphones', 'price' => 100.00],
        ]);
    }
}