 <div class="xp-section" style="padding-top: {!! !empty($blockData->padding_top) ? $blockData->padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->padding_bottom) ? $blockData->padding_bottom : '10px' !!}; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#212529' !!};">
    <div class="container">
        <div style="padding-top: {!! !empty($blockData->text_padding_top) ? $blockData->text_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->text_padding_bottom) ? $blockData->text_padding_bottom : '10px' !!};">
            @if (!empty($blockData->text))
                {!! $blockData->text !!}
            @endif
        </div>
    </div>
</div>