<div class="xp-section py-4" style="background-color:{!! !empty($blockData->text_background_color) ? $blockData->text_background_color : '#F8F9D9' !!};">
    <div class="">
        <div class="row text-center text-sm-left mb-4">
            <div class="col-sm-3 text-right">
                <img class="xp-image-small w-100 h-auto" src="{{ imageUrl($blockData->image1, 1600, 750, ['crop' => false]) }}" >
            </div>
            <div class="col-sm-9">
                <h2 class="p-4 my-2" style="background-color:{!! !empty($blockData->heading_color) ? $blockData->heading_color : '#D6DF27' !!};">
                    {!! $blockData->link_one_text !!}
                </h2>

                <ol class="text-left" style="font-weight: bold;">
                    <li> {!! $blockData->list_text1 !!}</li>
                    <li> {!! $blockData->list_text2!!}</li>

                    <li> {!! $blockData->list_text3 !!}</li>

                </ol>
            </div>
        </div>

    </div>
</div>
