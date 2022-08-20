@extends('front_end.layout.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="">Search Products Page</h2>

        </div>
        <div class="card-body">
            {{-- oninput="myFunction()" --}}
            <div class="card-header col-md-12">
                <input type="text" placeholder="Please Enter Product Name"
                    class="form-controller site-button support-button col-md-10" id="search" name="search"></input>

            </div>
            <div class="input-group mb-3 col-md-8 row">
                {{-- <div class="input-group-prepend col-md-10">
                    <span class="input-group-text" id="basic-addon1">Please Enter Product Name</span>
                </div> --}}

                <div class="d-none" id="search-content">
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script>
        $('body').on('keyup', "#search", function() {
            var data = $(search).val();
            console.log(data);
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
                        console.log(response);
                        var response = JSON.parse(response);
                        $('#search-content').empty();
                        $('#search-content').append('<h1 class="col-md-12">Search Result</h1>');
                        $('#search-content').append(response);

                    }
                }
            });
        });
        // function myFunction() {
        //     var data = $(search).val();
        //     // alert(data);
        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         url: "{{ route('products.ajax.search') }}",
        //         type: 'POST',
        //         data: data,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         success: function(response) {

        //             if (response == '0') {
        //                 alert('no data available');


        //             } else {
        //                 var response = JSON.parse(response);
        //                 $('#search-content').empty();
        //                 $('#search-content').append('<h1 class="col-md-12">Search Result</h1>');
        //                 $('#search-content').append(response);

        //             }
        //         }
        //     });
        // }
    </script>
@endsection
