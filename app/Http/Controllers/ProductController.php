<?php

namespace App\Http\Controllers;
use App\Models\Pharmacy;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
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
    public function product_search(Request $request)
    {
        
        return view('products.search-page');
    }
    public function products_ajax_search(Request $request)
    {
        
        $products = Product::where('title', 'like',  '%'.$request->search.'%')->get();

            $html = '';

            foreach ($products as $key => $row) {
                
                $html .= '<a class="text-primary btn btn-link col-md-12" style="font-size: 22px;" href="' . route('products.show', $row->id) . '">' . $row->title . '</a>';
            }
    
            return json_encode($html);
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
    public function store(ProductRequest $request)
    {
        $input = $request->except('pharmacies');
        if ($request->image) {
            $input['image'] = $this->storeImage($request->image, "products");

        }
        $product = Product::create($input);
        if ($request->has('pharmacies')) {
            $product->pharmacies()->attach($request->pharmacies);
        }
        if ($product) {
            return redirect()->route('products.index')->with('message', 'inserted successfully');
        } else {
            return back()->with('error', 'something went wrong');
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
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $pharmacy_ids = $product->pharmacies->pluck('id')->toArray();
        $pharmacies = Pharmacy::all();
        return view("products.edit", compact('product', 'pharmacies', 'pharmacy_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        if ($request->has('pharmacies')) {
            $product->pharmacies()->sync($request->pharmacies);
        }
        $input = $request->except('pharmacies');
        if ($request->image) {
            $input['image'] = $this->storeImage($request->image, "products");

        }
        $product = $product->update($input);
        if ($product) {
            
            return redirect()->route('products.index')->with('message', 'updated successfully');
        } else {
            
            return back()->with('error', 'something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = $product->delete();

        if ($product) {
            
            return redirect()->route('products.index')->with('message', 'deleted successfully');
        } else {
            
            return back()->with('message', 'something went wrong');
        }
    }
}
