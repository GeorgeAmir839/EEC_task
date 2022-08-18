@extends('front_end.layout.index')
@section('content')
<div class="row p-2">
    <div class="col-lg-11">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0 ">Add New</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">{{ trans('Title') }}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Title " id="name"
                                name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">image</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ trans('Browse') }}</div>
                                </div>
                                <div class="form-control file-amount">{{ trans('Choose File') }}</div>
                                <input type="hidden" name="banner" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            <span
                                class="small text-muted">{{ trans('This image is shown as cover banner in flash deal details page.') }}</span>
                            @error('banner')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">About description</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="About description" id="name"
                                name="description" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label">Pharmacy</label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker" name="pharmacy_id"  required>
                                <option value="0">All</option>
                                @foreach ($pharmacies as $pharmacy)
                                    <option value="{{ $pharmacy->id }}"
                                        >
                                        {{ $pharmacy->name }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">Price</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="price" id="name"
                                name="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="name">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="quantity" 
                                name="quantity" class="form-control" required>
                        </div>
                    </div>
                    <br>

                    <div class="form-group mb-0 text-right">
                      
                        <button type="submit" class="btn btn-primary">{{ trans('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
