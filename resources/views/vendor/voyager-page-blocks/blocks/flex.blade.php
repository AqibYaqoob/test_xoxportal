<div class="xp-section" style="padding-top: {!! !empty($blockData->padding_top) ? $blockData->padding_top : '100px' !!}; padding-bottom: {!! !empty($blockData->padding_bottom) ? $blockData->padding_bottom : '100px' !!}; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#212529' !!};">
    <div class="container">
        <div class="{!! !empty($blockData->height_md) ? $blockData->height_md : '' !!} {!! !empty($blockData->height_sm) ? $blockData->height_sm : '' !!} {!! !empty($blockData->height_lg) ? $blockData->height_lg : '' !!} d-flex flex-column flex-1 bg-blue" style="background-color: {!! !empty($blockData->background_color) ? $blockData->background_color : '#321681' !!}">
            @if (!empty($blockData->heading))
            <h1 class="xp-title-custom">
                {!! $blockData->heading !!}
            </h1>
            @endif
            <div class="mb-4">
             @if (!empty($blockData->content))
                <p class="xp-desc-custom">{!! $blockData->content !!}</p>
            @endif
            </div>
            @if (!empty($blockData->link))     
            <div class="link mb-3">
                <a style="color: #1C91CA" href="{{ $blockData->link }}" class="btn-link-center">{{ $blockData->button_text }}
                </a>
            </div>
            @endif
        </div>
    </div>
</div>