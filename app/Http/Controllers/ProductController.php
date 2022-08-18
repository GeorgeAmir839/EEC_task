<?php

namespace App\Http\Controllers;
use App\Models\Pharmacy;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd('dd');
        $sort_search = null;
        $products = Product::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $products = $products->where('title', 'like', '%' . $sort_search . '%');
        }
        $products = $products->paginate(15);
        return view('products.index', compact('products', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharmacies = Pharmacy::all();
        return view('products.create', compact('pharmacies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(
            request(),
            [
                // 'name' => 'required|max:120',
              
            ]
        );
        
 
        $input = $request->all();
        if ($request->image) {
            $input['image'] = $this->storeImage($request->image, "products");

        }
    //    dd($input);
        $product = Product::create($input);
        // dd($product);
        // if ($request->has('pharmacies')) {
        //     $product->pharmacies()->attach($request->pharmacies);
        // }
        if ($product) {
            return redirect()->route('products.index')->with('message', 'inserted successfully');;
        } else {
            return back()->with('message', 'error');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
