<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        Product::insert([
            ['name' => 'Orange', 'price' => 50000000, 'amount' => 27],
            ['name' => 'Banana', 'price' => 120000000, 'amount' => 17],
            ['name' => 'Bread', 'price' => 70000000, 'amount' => 0],
        ]);
    }
}
