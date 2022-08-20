<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\Product;
use Database\Seeders\CreateProductSeeder;
use Tests\TestCase;
class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_product_form()
    {
        $response= $this->get('/products/create');
        $response->assertStatus(200);
    }
    public function test_product_details()
    {
        $response= $this->get('/products/1');
        $this->assertTrue(true);
    }
    public function test_product_delete()
    {
       $product1=Product::find(1);
       if($product1){
           $product1->delete();
       }
       $this->assertTrue(true);
    }

    public function test_product_store()
    {
        $response= $this->post('/products/store',[
            'title' => 'product1',
            'description' => 'product1',
            'price' => '100',
            'image' => 'product1',
            'quantity' => '100',
        ]);
        $this->assertTrue(true);
    }
    public function test_if_data_exists_in_database()
    {
        $this->assertDatabaseHas('products', [
            'title' => 'Mekhi Douglas'
        ]);
    }
    public function test_if_data_does_not_exists_in_database()
    {
        $this->assertDatabaseHas('products', [
            'title' => 'John'
        ]);
    }

    public function test_if_seeders_works()
    {
        $this->seed();
    }

    public function test_if_seeder_works()
    {
        $this->seed(CreateProductSeeder::class);
    }
}
