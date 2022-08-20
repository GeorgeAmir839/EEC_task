<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatePharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pharmacy::create([
            'name' => 'pharmacytest',
            'address' => 'pharmacytest',
           
        ]);
    }
}
