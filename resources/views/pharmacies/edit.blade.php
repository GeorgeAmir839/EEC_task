@extends('front_end.layout.index')
@section('content')
    <div class="row p-2">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0 ">Update</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('pharmacies.update', $pharmacy->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label @error('name') is-invalid @enderror"
                                for="name">name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $pharmacy->name }}" placeholder="name " id="name"
                                    name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label" for="name">About address</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $pharmacy->address }}" placeholder="About address"
                                    id="name" name="address" class="form-control" required>
                            </div>
                        </div>

                        @if ($products->count() > 0)
                            <div class="form-group row">
                                <label class="col-sm-3 col-from-label">pharmacies</label>
                                <div class="col-md-9">
                                    <select class="form-control js-example-basic-single" id="pets" multiple="multiple"
                                        name="products[]">
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
@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            data = [];
            data = {!! json_encode($product_ids) !!};
            $('.js-example-basic-single').val(data);
            $('.js-example-basic-single').trigger('change');
        });
    </script>
@endsection
