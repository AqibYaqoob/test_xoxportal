<section class="section text-center" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}')">
    <div class="div-h100"></div>
    <div class="container">
        <div class="d-flex flex-column flex-lg-row">
            <div class="flex-even d-flex flex-lg-1 text-left p-4 p-lg-0" style="background-color: {!! !empty($blockData->text_background_color) ? $blockData->text_background_color : '#000000' !!};">
                <div class="" style="width: 50% !important;">
                    {!! $blockData->text !!}</div>
            </div>
            <div class="flex-even text-left" style="background-color: {!! !empty($blockData->enquiry_background_color) ? $blockData->enquiry_background_color : '#000000' !!};">
                <div class="p-4 p-lg-5" style="    width: 50% !important;">
                        {!! $blockData->enquiry_text !!}
                </div>
            </div>
        </div>
    </div>
    <div class="div-h100"></div>
</section>