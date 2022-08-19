@extends('front_end.layout.index')
@section('content')
    <div class="row p-2">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0 ">Add New</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('pharmacies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 control-label @error('name') is-invalid @enderror"
                                for="name">Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('name') }}" placeholder="Name" id="name"
                                    name="name" class="form-control" required>
                            </div>
                        </div>

                        @if ($products->count() > 0)
                            <div class="form-group row">
                                <label class="col-sm-3 col-from-label">Products</label>
                                <div class="col-md-9">
                                    <select class="form-control js-example-basic-single" id="pets" multiple="multiple" name="products[]"
                                        >
                                        <option>All</option>

                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-3 control-label" for="name">Address</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('address') }}" placeholder="Address" id="name"
                                    name="address" class="form-control" required>
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

