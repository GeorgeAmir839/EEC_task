<div class="mt-3" style="color: #a94442">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if (session()->has('error'))
        <div class="alert alert-danger" style="font-weight: bold"> {{ session()->get('error') }}</div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success" style="font-weight: bold"> {{ session()->get('message') }}</div>
    @endif


</div>
