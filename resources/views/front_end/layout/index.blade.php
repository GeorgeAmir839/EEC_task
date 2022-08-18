<!DOCTYPE html>
<html>
@includeIf('front_end.layout.head')

<body data-spy="scroll" data-target=".nav-bar" data-offset="50">
    <div class="wrapper" id="tableofcontent">
        @includeIf('front_end.layout.side-navbar')
        <div id="content">
            @includeIf('front_end.layout.nav')
            @includeIf('front_end.layout.alert')
            @yield("content")
        </div>
    </div>
    @includeIf('front_end.layout.footer')
    @includeIf('front_end.layout.scripts')
    @includeIf('front_end.layout.blade-scripts')
</body>


</html>

