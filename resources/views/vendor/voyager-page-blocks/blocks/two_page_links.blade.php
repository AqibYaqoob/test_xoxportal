
<section class="section" style="padding-top: {!! !empty($blockData->padding_top) ? $blockData->padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->padding_bottom) ? $blockData->padding_bottom : '10px' !!}; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#212529' !!};">
    <div class="container-fluid text-center">
        <div class="d-flex justify-content-center">
        	@if (!empty($blockData->link_one_text))
	            <div class="link mb-3">
	                <a href="{!! !empty($blockData->link_one_link) ? $blockData->link_one_link : '#' !!}" class="btn-link-lg-center">{!! $blockData->link_one_text !!}</a>
	            </div>
            @endif
            @if (!empty($blockData->link_two_text))
	            <div class="link mb-3 ml-3">
	                <a href="{!! !empty($blockData->link_second_link) ? $blockData->link_second_link : '#' !!}" class="btn-link-lg-center">{!! $blockData->link_two_text !!}</a>
	            </div>
            @endif
        </div>
    </div>
</section>		