<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Kopi Susu', 'price' => 18000, 'description' => 'Kopi susu gula aren']);
        Product::create(['name' => 'Teh Manis', 'price' => 8000, 'description' => 'Teh manis dingin']);
        Product::create(['name' => 'Roti Bakar', 'price' => 15000, 'description' => null]);
    }
}
