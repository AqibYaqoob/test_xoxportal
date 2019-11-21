<div class="xp-section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="container">
    	<div class="text-center">
    		@if(!empty($blockData->link))
    			<a href="{!! !empty($blockData->link) ? $blockData->link : '#' !!}" class="bg-black white py-2 px-4" style="border-radius: 4px; background-color: {!! !empty($blockData->button_color) ? $blockData->button_color : '#000000' !!}; color: {!! !empty($blockData->button_text_color) ? $blockData->button_text_color : '#ffffff' !!};">{!! $blockData->text !!}</a>
    		@endif
    	</div>	
    </div>
</div>    	
