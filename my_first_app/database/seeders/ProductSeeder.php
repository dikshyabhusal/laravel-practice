<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'iPhone 15',
            'price' => 1299.99,
            'description' => 'Latest Apple smartphone'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'price' => 1099.99,
            'description' => 'Flagship Samsung phone'
        ]);
    }
}