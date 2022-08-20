<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(50)->create();
        \App\Models\Pharmacy::factory(20)->create(); 
        $products=\App\Models\Product::all();
        $pharmacies=\App\Models\Pharmacy::all();
        foreach($products as $product){
            $product->pharmacies()->attach($pharmacies->random(rand(1,20))->pluck('id')->toArray());
        }
        
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
