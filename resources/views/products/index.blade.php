@extends('front_end.layout.index')
@section('content')
    <a href="{{ route('products.create') }}"  class="site-button support-button">Create New</a>


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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td><a class="btn default btn-outline  " target="_blank" href="{{ asset($product->image) }}">

                                <img class="img-responsive" height="50px" width="50px"
                                    src="{{ asset($product->image) }}">
                            </a></td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <div class="row">
                                <a class="text-primary btn btn-pure btn-outline col-md-4" href="{{ route('products.edit', $product->id) }}"
                                    title="{{ trans('Edit') }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>

                                <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="text-danger btn btn-pure btn-outline col-md-4">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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
