@extends('front_end.layout.index')
@section('content')
    <a href="{{ route('pharmacies.create') }}" target="_blank" class="site-button support-button">Create New</a>


    <div class="card">
        <div class="card-header">
            <h2 class="">All Pharmacies</h2>
            <div class="pull-left ml-2 clearfix">
                <form class="" id="sort_offers" action="" method="GET">
                    <div class="">

                        <div class="input-group mb-3 " style="">
                            <span class="input-group-text" id="basic-addon1">Search</span>
                            <input type="text" class="form-control" id="search"
                                name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset
                                placeholder="{{ trans('Type name & Enter') }}">
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
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($pharmacies as $pharmacy)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pharmacy->name}}</td>
                        <td>{{ $pharmacy->address }}</td>
                       
                        <td>
                            <div class="row">
                                <a class="text-primary btn btn-pure btn-outline col-md-4" href="{{ route('pharmacies.edit', $pharmacy->id) }}"
                                    title="{{ trans('Edit') }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>

                                <form method="POST" action="{{ route('pharmacies.destroy', $pharmacy->id) }}">
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
                    {{ $pharmacies->appends(request()->input())->links() }}
                </div>
            </div> --}}
        </div>
    </div>
@endsection
