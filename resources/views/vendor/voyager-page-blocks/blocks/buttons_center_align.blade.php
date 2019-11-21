<section class="section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="container-fluid text-center">
        <div class="d-flex justify-content-center">
            @for ($i = 1; $i <= 4; $i++)
                @php
                    $button_text = 'button_text_'.$i;
                    $button_link = 'button_link_'.$i;
                    $text_below_button = 'text_below_button_'.$i;
                    $button_image = 'button_image_'.$i;
                @endphp
                @if (!empty($blockData->$button_text))
                    @if (empty($blockData->$button_image))
                        <div class="btn-box mb-3">
                            <a class="btn" href="{!! $blockData->$button_link !!}">{!! $blockData->$button_text !!}</a>
                        </div>
                    @endif
                @endif    
                @if (!empty($blockData->$button_image))
                    <div class="link mb-3 ml-3">
                        <a href="{!! $blockData->$button_link !!}"><img style="width: 150px; height: auto;" ssrc="{!! asset('storage/'.$blockData->$button_image) !!}" /></a>
                    </div>
                @endif   
            @endfor
        </div>
    </div>
</section>        