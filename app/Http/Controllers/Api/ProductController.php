<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Models\Product;
use App\Traits\apiResponseTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use apiResponseTrait;
    public function index()
    {
        $products= Product::with('pharmacies')->get();
        return $this->apiResponse($products,'success',200);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('pharmacies')->find($id);
        
        if($product)
        {
            return $this->apiResponse($product,'success',200);
        }

        return $this->apiResponse(null,'Not Found',404);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator  = Validator::make($request->all(),
        // [
        //     'name' => 'required|max:255',
        //     'level' => 'required|max:255',
        //     'category_id'=> 'required',
        // ]);

        // if ($validator->fails())
        // {
        //     return $this->apiResponse(null,$validator->errors(),400);
        // }
        $input = $request->except('pharmacies');
        $product = Product::create($input);
        if ($request->has('pharmacies')) {
            $product->pharmacies()->attach($request->pharmacies);
        }
        if($product)
        {
            return $this->apiResponse($product,'Saved',201);
        }

        return $this->apiResponse(null,'Not Save',400);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $product = Product::find($id);
        if ($request->has('pharmacies')) {
            $product->pharmacies()->sync($request->pharmacies);
        }
        $input = $request->except('pharmacies');
        if(!$product)
        {
            return $this->apiResponse(null,'Not Found',404);
        }
        $product = $product->update($input);

        if($product)
        {
            return $this->apiResponse($product,'Update',201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if(!$product)
        {
            return $this->apiResponse(null,'Not Found',404);
        }

        $product->delete($id);

        if($product)
        {
            return $this->apiResponse(null,'Deleted',200);
        }
    }
}
