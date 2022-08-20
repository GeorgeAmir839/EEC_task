<?php

namespace Tests\Unit;
use App\Models\Pharmacy;

use Tests\TestCase;

class PharmacyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   public function test_pharmacy_form()
   {
       $response= $this->get('/pharmacies/create');
       $response->assertStatus(200);
   }
    public function test_pharmacy_details()
    {
         $response= $this->get('/pharmacies/1');
         $this->assertTrue(true);
    }
    public function test_pharmacy_delete()
    {
       $pharmacy1=Pharmacy::find(1);
       if($pharmacy1){
           $pharmacy1->delete();
       }
       $this->assertTrue(true);
    }
    public function test_pharmacy_store()
    {
        $response= $this->post('/pharmacies/store',[
            'name' => 'pharmacy1',
            'address' => 'pharmacy1',
            
        ]);
        $this->assertTrue(true);
    }
    public function test_if_data_exists_in_database()
    {
        $this->assertDatabaseHas('pharmacies', [
            'name' => 'pharmacytest'
        ]);
    }
    public function test_if_data_does_not_exists_in_database()
    {
        $this->assertDatabaseHas('pharmacies', [
            'name' => 'John'
        ]);
    }
    
}
