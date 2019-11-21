<div class="section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!}">
    	@if(!empty($blockData->image))
        	<img class="w-100 h-auto" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : 'unset' !!}; max-width: {!! !empty($blockData->image_width) ? $blockData->image_width : 'unset' !!};" src="{{ imageUrl($blockData->image, 1600, 750, ['crop' => false]) }}">
        @endif
    </div>
</div>
