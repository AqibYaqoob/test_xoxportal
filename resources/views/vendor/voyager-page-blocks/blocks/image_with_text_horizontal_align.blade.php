<div class="xp-section" style="background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#F3F3F3' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!}">
        @php
            $column_distribution = explode(",", $blockData->column_distribution);
            $image_position = !empty($blockData->image_position) ? $blockData->image_position : '0';

        @endphp
        <div class="row mb-4" style="text-align: {!! !empty($blockData->text_alignment) ? $blockData->text_alignment : 'left' !!};">
                <div class="{{ $column_distribution[0] }}">
                    @if($image_position == '1')
                        @if (!empty($blockData->image_src))
                        <div style="text-align: {!! !empty($blockData->image_alignment) ? $blockData->image_alignment : 'unset' !!};">
                            <img class="w-100 h-auto" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : '' !!} !important; max-width: {!! !empty($blockData->image_width) ? $blockData->image_width : '' !!} !important;" src="{!! imageUrl($blockData->image_src, 1600, 750, ['crop' => false]) !!}" />
                            @if (!empty($blockData->image_text))
                                {!! $blockData->image_text !!}
                            @endif
                        </div>    
                        @endif
                    @else
                        <div class="justify-content-center">
                            <h2 class="mb-3 bold" style="background-color: {!! !empty($blockData->heading_background_color) ? $blockData->heading_background_color : '#D6DF27' !!}; color: {!! !empty($blockData->heading_text_color) ? $blockData->heading_text_color : '#D6DF27' !!};">
                                    {!! !empty($blockData->heading) ? $blockData->heading : '' !!}
                            </h2>
                            {!! !empty($blockData->content) ? $blockData->content : '' !!}
                        </div>    
                    @endif    
                </div>
            <div class="{{ $column_distribution[1] }}">
                @if($image_position == '1')
                    <div class="justify-content-center">
                        <h2 class="mb-3 bold" style="background-color: {!! !empty($blockData->heading_background_color) ? $blockData->heading_background_color : '#D6DF27' !!};">
                                {!! !empty($blockData->heading) ? $blockData->heading : '' !!}
                        </h2>
                    </div>
                    {!! !empty($blockData->content) ? $blockData->content : '' !!}    
                @else
                    @if (!empty($blockData->image_src))
                        <div style="text-align: {!! !empty($blockData->image_alignment) ? $blockData->image_alignment : 'unset' !!};">
                            <img class="w-100 h-auto" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : '' !!} !important; max-width: {!! !empty($blockData->image_width) ? $blockData->image_width : '' !!} !important;" src="{!! imageUrl($blockData->image_src, 1600, 750, ['crop' => false]) !!}" />
                            @if (!empty($blockData->image_text))
                                {!! $blockData->image_text !!}
                            @endif
                        </div>    
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>