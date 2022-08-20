<?php

namespace Database\Seeders;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pharmacy;
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
       
        \App\Models\Product::factory(50)->create();
        \App\Models\Pharmacy::factory(20)->create(); 
        $products=\App\Models\Product::all();
        $pharmacies=\App\Models\Pharmacy::all();
        foreach($products as $product){
            $product->pharmacies()->attach($pharmacies->random(rand(1,20))->pluck('id')->toArray());
        }
        
        
        $this->call([
            CreateProductSeeder::class,
            CreatePharmacySeeder::class,
        ]);
    }
}
