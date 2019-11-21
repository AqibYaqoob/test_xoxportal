@include('voyager-frontend::partials.meta')
@include('voyager-frontend::partials.header')

<!-- <main class="main-content"> -->
    @yield('content')
<!-- </main> -->

@section('js')
<script>
    $(document).ready(function(){
        if($('div').hasClass('xp-subheader')){
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 70) {
                    $(".xp-subheader").addClass("fixed-top");
                } else {
                    //remove the background property so it comes transparent again (defined in your css)
                $(".xp-subheader").removeClass("fixed-top");
                }
            });
            $( ".xp-header" ).removeClass( "fixed-top" );
            $( "#main" ).css("padding-top", "unset");
        }   
    })
</script>
@endsection

@include('voyager-frontend::partials.footer')