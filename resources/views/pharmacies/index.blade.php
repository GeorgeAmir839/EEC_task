@extends('front_end.layout.index')
@section('content')

			
            <a href="{{ route('products.create') }}" target="_blank" class="site-button support-button">Create New</a>
		
	
    <div class="card">
        <div class="card-header">
            <h2 class="">All Products</h2>
            <div class="pull-left ml-2 clearfix">
                <form class="" id="sort_offers" action="" method="GET">
                    <div class="">
                        
                        <div class="input-group mb-3 " style="">
                            <span class="input-group-text" id="basic-addon1">Search</span>
                            <input type="text" class="form-control" id="search"
                                name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset
                                placeholder="{{ trans('Type title & Enter') }}">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="clearfix">
                <div class="pull-right">
                    {{ $popups->appends(request()->input())->links() }}
                </div>
            </div> --}}
        </div>
    </div>
@endsection
