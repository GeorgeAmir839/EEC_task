<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function products_ajax_search(Request $request)
    {
        
        $products = Product::where('title', 'like',  $request->search.'%')->get();

            $html = '';

            foreach ($products as $key => $row) {
                
                $html .= '<a class="text-primary btn btn-link col-md-12" style="font-size: 22px;" href="' . route('products.show', $row->id) . '">' . $row->title . '</a>';
            }
    
            echo json_encode($html);
    }
}
