<div class="xp-section" style="background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-size: cover;
    background-position: center;">
    <div class="container white py-3" style="text-align: {!! !empty($blockData->text_alignment) ? $blockData->text_alignment : 'center' !!};">
        <div class="d-flex flex-column flex-1" style="min-height: 550px;">
            @if(!empty($blockData->heading))
            <h1 class="xp-title-lg gotham-bold" style="color: {!! !empty($blockData->heading_color) ? $blockData->heading_color : '#63C1BF' !!} !important;">{!! $blockData->heading !!}</h1>
            @endif
            {!! $blockData->content !!}
        </div>
    </div>
</div>