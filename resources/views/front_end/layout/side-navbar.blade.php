<nav id="nevbarleft">
    <div class="side-nav full-height">
        <div class="sidebar-header">
            <h2>
                {{-- <img src="https://eecegypt.com/wp-content/themes/industify/framework/img/eecgroup-logo.png" alt="logo" class="small-logo"/> --}}
                <img src="https://eecegypt.com/wp-content/themes/industify/framework/img/eecgroup-logo.png"
                    alt="logo" />
            </h2>
        </div>
        <div class="nav-bar">
            {{-- @php
                dd(request()->route()->getName());
            @endphp --}}
            <ul class="list-unstyled content-scroll components navbar-nav nav" id="download-button">
                <li class="@if (request()->route()->getName() == 'home') active @endif"><a href="{{route('home')}}">Home</a></li>
                <li class="@if (request()->route()->getName() == 'products.index') active @endif"><a href="{{route('products.index')}}">Our Product</a></li>
                <li class="@if (request()->route()->getName() == 'pharmacies.index') active @endif"><a href="{{route('pharmacies.index')}}">Our Pharmacy</a></li>
                {{-- <li class="@if (request()->route()->getName() == 'search.products') active @endif"><a href="{{route('search.products')}}">Search Products Page</a></li> --}}

                {{-- <li><a href="#plugins"> Plugins</a></li>
                <li><a href="#html_structure">Html Structure</a></li>
                <li><a href="#our_product">Our Products </a></li>
                <li><a href="#custom_work">Custom Work Requirements </a></li>
                <li><a href="#version_history">Version History</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
