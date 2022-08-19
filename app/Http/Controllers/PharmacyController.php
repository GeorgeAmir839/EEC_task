<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\Product;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use App\Http\Requests\PharmacyRequest;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $pharmacies = Pharmacy::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $pharmacies = $pharmacies->where('title', 'like', '%' . $sort_search . '%');
        }
        $pharmacies = $pharmacies->paginate(15);
        return view('pharmacies.index', compact('pharmacies', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        return view('pharmacies.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PharmacyRequest $request)
    {

        $input = $request->all();
        $pharmacy = Pharmacy::create([
            'name' => $input['name'],
            'address' => $input['address'],
        ]);
        if ($request->has('products')) {
            $pharmacy->products()->attach($request->products);
        }
        if ($pharmacy) {
            return redirect()->route('pharmacies.index')->with('message', 'inserted successfully');
        } else {
            return back()->with('error', 'something went wrong');
        }
    }

    public function edit(Pharmacy $pharmacy)
    {
        $product_ids = $pharmacy->products->pluck('id')->toArray();
        $products = Product::get();
        return view("pharmacies.edit", compact('pharmacy', 'products', 'product_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(PharmacyRequest $request, Pharmacy $pharmacy)
    {

        if ($request->has('products')) {
            $pharmacy->products()->sync($request->products);
        }
        $input = $request->except('products');
        $pharmacy = $pharmacy->update($input);

        if ($pharmacy) {

            return redirect()->route('pharmacies.index')->with('message', 'updated successfully');
        } else {

            return back()->with('error', 'something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacy = $pharmacy->delete();

        if ($pharmacy) {

            return redirect()->route('pharmacies.index')->with('message', 'deleted successfully');
        } else {

            return back()->with('message', 'something went wrong');
        }
    }
}
