<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/png" href="https://eecegypt.com/wp-content/themes/industify/framework/img/eecgroup-logo.png">

    <!-- PAGE TITLE HERE -->
    <title>EEC-task</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Css Style -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jstree/dist/themes/default/style.min.css') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".nav-bar" data-offset="50">
    <div class="wrapper" id="tableofcontent">

        <!-- Sidebar Holder -->
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
                    <ul class="list-unstyled content-scroll components navbar-nav nav" id="download-button">
                        <li class="active"><a href="#introduction">Introduction</a></li>
                        <li><a href="#product">Our Product</a></li>
                        <li><a href="#folder_directories">Our Pharmacy</a></li>
                        {{-- <li><a href="#theme-feature">Theme Features</a></li> --}}
                        {{-- <li><a href="#plugins"> Plugins</a></li>
                        <li><a href="#html_structure">Html Structure</a></li>
                        <li><a href="#our_product">Our Products </a></li>
                        <li><a href="#custom_work">Custom Work Requirements </a></li>
                        <li><a href="#version_history">Version History</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <!-- Navber -->
            <nav class="navbar navbar-default top-nav-bar ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <a href="https://support.w3itexperts.com" target="_blank"
                        class="site-button support-button">Support</a>
                    <a href="https://1.envato.market/KrOOv" target="_blank" class="site-button support-button">Buy
                        Now</a>
                </div>
            </nav>

            <!-- Banner -->
            <section class="app-brief slide-banner">
                <div style="background-color: rgba(51, 170, 51, .3)">
                    <div class="container">
                        <div class="section-header">
                            <h2>EEC group task
                            </h2>
                            <div class="colored-line"></div>
                            <div class="section-description">
                                © 2022 George, BED.
                            </div>
                            <div class="colored-line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Introduction -->
            <section class="app-brief" id="introduction">
                <div class="container center-align">
                    <h1>Edumin</h1>
                    <h3>Edumin - Education Admin Dashboard Template</h3>
                    <p>This documentation is last updated on 21 September 2021.</p>
                    <p>Thank you for purchasing this HTML template.</p>
                    <p><strong>If you like this template, Please support us by rating this template with 5 stars
                        </strong> </p>
                </div>
            </section>
            <hr />

            <!-- Sass Compile -->
            <section class="app-brief" id="product">
                <div class="container left-align">
                    <h1>our product</h1>
                </div>
            </section>
            <hr />

            <!-- Folder Directories -->
            <section class="app-brief" id="folder_directories">
                <div class="container left-align">
                    <div class="section-header">
                        <h2 class="dark-text">Folder Directories - </h2>
                    </div>
                    <div id="dz_tree" class="tree-demo">
                        <ul>
                            <li data-jstree='{ "opened" : true }'>xhtml
                              
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <hr />

            <!-- Theme Feature -->
            {{-- <section class="app-brief" id="theme-feature">
                <div class="container left-align">
                    <div class="section-header">
                        <h2 class="dark-text">Folder Directories - </h2>
                    </div>
                    <div id="dz_tree" class="tree-demo">
                        <ul>
                            <li data-jstree='{ "opened" : true }'>xhtml
                              
                            </li>
                        </ul>
                    </div>
                </div>
                
            </section> --}}
            <hr />

            <!-- Plugins Included -->




            <!-- Footer -->
            <footer class="app-brief grey-bg">
                <div class="container">
                    <p class="copyright">
                        © 2021 Dexignlab , All Rights Reserved
                    </p>
                </div>
            </footer>

        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/smoothscroll.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.localScroll.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/load.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jstree/dist/jstree.min.js') }}"></script>
    <script>
        // prettyPhoto
        jQuery(document).ready(function() {
            jQuery('.dzClickload').click(function() {
                jQuery('.dzClickload').removeClass('active');
                jQuery(this).addClass('active');
            });

            jQuery(".content-scroll").mCustomScrollbar({
                setWidth: false,
                setHeight: false,
                axis: "y"
            });

            $(".full-height").css("height", $(window).height());

            $("#dz_tree").jstree({
                "core": {
                    "themes": {
                        "responsive": false
                    }
                },
                "types": {
                    "default": {
                        "icon": "fa fa-folder"
                    },
                    "file": {
                        "icon": "fa fa-file-text"
                    }
                },
                "plugins": ["types"]
            });
        });
        $(document).ready(function() {
            $(".navbar-nav a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    });
                }
            });
        });
    </script>
</body>

</html>
