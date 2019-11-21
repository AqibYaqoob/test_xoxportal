<div class="xp-section" style="background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-size: cover;
    background-position: center;">
    <div class="d-flex flex-column flex-sm-row" style="min-height: 550px;">
        <div class="d-flex align-items-start justify-content-start w-100 w-sm-50 p-5">
            {!! !empty($blockData->content1) ? $blockData->content1 : '' !!}
        </div>
        <div class="d-flex align-items-end justify-content-end w-100 w-sm-50 p-5">
             {!! !empty($blockData->content2) ? $blockData->content2 : '' !!}
        </div>
    </div>
</div>