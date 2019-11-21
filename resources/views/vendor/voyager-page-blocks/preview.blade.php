@include('voyager-frontend::partials.meta')
@include('voyager-frontend::partials.header')

<!-- <main class="main-content"> -->
@include('msg.flash_message')
@if($page->status=='ACTIVE')
    @foreach($blocks as $block)
        @if (!empty($block->html))
            @php echo (string)$block->html @endphp
        @else
            <div class="page-block">
                <div class="callout alert">
                    <div class="grid-container column text-center">
                        <h2><< !! Warning: Missing Block !! >></h2>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@else
    <div class="page-block">
        <div class="callout alert">
            <div class="grid-container column text-center">
                <h2 style="padding-top: 20%;padding-bottom: 20%"><< !! This Page is not Published Yet !! >></h2>
            </div>
        </div>
    </div>
@endif
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