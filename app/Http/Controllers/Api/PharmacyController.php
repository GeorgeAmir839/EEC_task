<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Models\Product;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index()
    {
        $pharmacies= Pharmacy::get();
        return $this->apiResponse($pharmacies,'success',200);
    }

   
    public function store(Request $request)
    {
        
        $input = $request->except('products');
        $pharmacy = Pharmacy::create($input);
        if ($request->has('products')) {
            $pharmacy->products()->attach($request->products);
        }
        if($pharmacy)
        {
            return $this->apiResponse($pharmacy,'Saved',201);
        }

        return $this->apiResponse(null,'Not Save',400);
    }


    public function update(Request $request, $id)
    {
       
        $pharmacy = Pharmacy::find($id);
        if ($request->has('pharmacies')) {
            $pharmacy->pharmacies()->sync($request->pharmacies);
        }
        $input = $request->except('products');
        if(!$pharmacy)
        {
            return $this->apiResponse(null,'Not Found',404);
        }
        $pharmacy = $pharmacy->update($input);

        if($pharmacy)
        {
            return $this->apiResponse($pharmacy,'Update',201);
        }
    }

    public function destroy($id)
    {
        $pharmacy = Pharmacy::find($id);

        if(!$pharmacy)
        {
            return $this->apiResponse(null,'Not Found',404);
        }

        $pharmacy->delete($id);

        if($pharmacy)
        {
            return $this->apiResponse(null,'Deleted',200);
        }
    }
}
