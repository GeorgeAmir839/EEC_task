@extends('front_end.layout.index')
@section('content')


    <div class="card">
        <div class="card-header">
            <h2 class=""> product details</h2>
           
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        
                        
                        <th scope="col text-center">Title</th>
                        <th scope="col text-center">Description</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        
                    <tr class="text-center">
                       
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        
                       
                    </tr>
                    
                </tbody>
            </table>
            <br>
            <div class="card-header">
                <h2 class="">Cheaper 5 Pharmacies For This Product</h2>
               
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pharmacy Name</th>
                        <th scope="col">Product Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        @foreach ($product->pharmacies->sortBy('profit_margin')->take(5) as $pharmacy)
                       
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pharmacy->name}}</td>
                        <td>{{ $product->price + ($pharmacy->profit_margin * $product->price / 100)}}</td>
                       
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
