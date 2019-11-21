@include('msg.flash_message')
@if($page->status=='ACTIVE')
    @foreach($blocks as $block)
        @if($block->publish=="1" )
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
        @endif
    @endforeach
@else
    <div class="page-block">
        <div class="callout alert">
            <div class="grid-container column text-center">
                <h2 style="padding-top: 20%;padding-bottom: 20%"><< !! This Page is not AActive Yet !! >></h2>
            </div>
        </div>
    </div>
@endif

