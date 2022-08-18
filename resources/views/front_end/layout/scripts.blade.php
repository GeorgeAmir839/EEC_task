
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
@yield("js")
