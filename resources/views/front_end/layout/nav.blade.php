<nav class="navbar navbar-default top-nav-bar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="input-group mb-3 col-md-8 row">
            {{-- <div class="input-group-prepend col-md-10">
                <span class="input-group-text" id="basic-addon1">Please Enter Product Name</span>
            </div> --}}
            <input type="text" oninput="myFunction()" placeholder="Please Enter Product Name"
                class="form-controller site-button support-button col-md-10" id="search" name="search"></input>
           <div class="d-none" id="search-content" >
           </div>
        </div>

    </div>
</nav>
@section('js')
    <script>
        function myFunction() {
            var data = $(search).val();
            // alert(data);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('products.ajax.search') }}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {

                    if (response == '0') {
                        alert('no data available');
                       

                    } else {
                        var response = JSON.parse(response);
                        $('#search-content').empty();
                        $('#search-content').append('<h1 class="col-md-12">Search Result</h1>');
                        $('#search-content').append(response);
                        
                    }
                }
            });
        }
    </script>
@endsection
