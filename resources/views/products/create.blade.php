@extends('front_end.layout.index')
@section('content')
<div class="row p-2">
    <div class="col-lg-11">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0 ">Add New</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label @error('title') is-invalid @enderror" for="name">Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ old('title') }}" placeholder="Title " id="name"
                                name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group  row">
                        <label class="col-sm-3 control-label @error('image') is-invalid @enderror">Image</label>
                        <div class="col-sm-9">
                            <input type="file"
                           
                                   accept="image/x-png,image/gif,image/jpeg"
                                   name="image" class="dropify">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">About description</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ old('description') }}" placeholder="About description" id="name"
                                name="description" class="form-control" required>
                        </div>
                    </div>
                    @if ($pharmacies->count() > 0)
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label">Pharmacy</label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker js-example-basic-single" multiple="multiple" name="pharmacies[]"  required>
                                <option >All</option>
                                @foreach ($pharmacies as $products)
                                    <option value="{{ $products->id }}"
                                        >
                                        {{ $products->name }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">Price</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ old('price') }}" placeholder="price" id="name"
                                name="price" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ old('quantity') }}" placeholder="quantity" 
                                name="quantity" class="form-control" required>
                        </div>
                    </div>
                    <br>

                    <div class="form-group mb-0 text-right">
                      
                        <button type="submit" class="btn btn-info">{{ trans('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
