<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'producttest',
            'description' => 'producttest',
            'price' => '100',
            'image' => 'https://via.placeholder.com/150',
            'quantity' => '100',
        ]);
    }
}
