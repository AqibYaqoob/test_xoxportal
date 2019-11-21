<div class="section text-center" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!}">
    	<!-- Feature type =[1 => Images, 2 => Bullets, 3 => Square Boxes With Data] -->
        <div class="xp-hide xp-lg-show">
            <div class="row" style="padding-top: {!! !empty($blockData->row_padding_top) ? $blockData->row_padding_top : '3rem' !!} !important; padding-bottom: {!! !empty($blockData->row_padding_bottom) ? $blockData->row_padding_bottom : '3rem' !!} !important;">
                @for ($i = 1; $i <= 8; $i++)
                    @php
                        $image_src = 'image_'.$i;
                        $title = 'title_'.$i;
                        $detail = 'detail_'.$i;
                        $inner_text = 'inner_block_text_'.$i;
                    @endphp
                    @if ((!empty($blockData->$image_src) && $blockData->feature_type == 1) || (!empty($blockData->bullet_type) && $blockData->feature_type == 2 && !empty($blockData->$title)) || ($blockData->feature_type == 3) && !empty($blockData->$title))
                    <div class="{!! !empty($blockData->column_no) ? $blockData->column_no : 'col-md-3' !!}">
                    	<div class="d-flex flex-column align-items-center">
                    		@if($blockData->feature_type == 1)
	                        <img class="w-auto mb-2" src="{{ asset('storage/'.$blockData->$image_src) }}" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : '250px' !!}" />
	                        @elseif($blockData->feature_type == 2)
	                        	<div class="{!! !empty($blockData->bullet_type) ? $blockData->bullet_type : 'feature-item-image' !!} mb-4">
	                        		@if(!empty($blockData->$inner_text))
	                        			<h4>{!! $blockData->$inner_text !!}</h4>
	                        		@endif
	                        	</div>
	                        @else
	                        	<div class="way-item mb-4">
	                        		@if(!empty($blockData->$inner_text))
                                    <h2>{!! $blockData->$inner_text !!}</h2>
                                    @endif
                                </div>	
	                        @endif
	                        @if(!empty($blockData->$title))
	                        <h4 class="mb-2" style="font-size: {!! !empty($blockData->title_font_size) ? $blockData->title_font_size : '' !!}; color: !! !empty($blockData->title_font_color) ? $blockData->title_font_color : '#000000' !!};">{!! $blockData->$title !!}</h4>
	                        @endif
	                        @if(!empty($blockData->$detail))
                            <p style="font-size: {!! !empty($blockData->detail_font_size) ? $blockData->detail_font_size : '' !!}; color: !! !empty($blockData->detail_font_color) ? $blockData->detail_font_color : '#000000' !!};">{!! $blockData->$detail !!}</p>
                            @endif
	                    </div>
                    </div>
                    @endif
                @endfor
            </div>
        </div>
        <div class="swiper-container xp-show xp-lg-hide new-container-mobile py-md-5">
            <div class="swiper-wrapper">
                 @for ($i = 1; $i <= 8; $i++)
                    @php
                        $image_src = 'image_'.$i;
                        $title = 'title_'.$i;
                        $detail = 'detail_'.$i;
                        $inner_block_text = 'inner_block_text_'.$i;
                    @endphp
                    @if ((!empty($blockData->$image_src) && $blockData->feature_type == 1) || (!empty($blockData->bullet_type) && $blockData->feature_type == 2 && !empty($blockData->$title)) || ($blockData->feature_type == 3) && !empty($blockData->$title))
                    <div class="swiper-slide p-4">
                         <div class="d-flex flex-column align-items-center">
                    		@if($blockData->feature_type == 1)
	                        <img class="w-auto mb-2" src="{{ asset('storage/'.$blockData->$image_src) }}" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : '250px' !!}" />
	                        @elseif($blockData->feature_type == 2)
	                        	<div class="{!! !empty($blockData->bullet_type) ? $blockData->bullet_type : 'feature-item-image' !!} mb-4">
	                        		@if(!empty($blockData->$inner_block_text))
	                        			<h4>{!! $blockData->$inner_block_text !!}</h4>
	                        		@endif
	                        	</div>
	                        @else
	                        	<div class="way-item mb-4">
	                        		@if(!empty($blockData->$inner_block_text))
                                    <h2>{!! $blockData->$inner_block_text !!}</h2>
                                    @endif
                                </div>	
	                        @endif
	                        @if(!empty($blockData->$title))
	                        <h4 class="mb-2" style="font-size: {!! !empty($blockData->title_font_size) ? $blockData->title_font_size : '' !!}; color: !! !empty($blockData->title_font_color) ? $blockData->title_font_color : '#000000' !!};">{!! $blockData->$title !!}</h4>
	                        @endif
	                        @if(!empty($blockData->$detail))
                            <p style="font-size: {!! !empty($blockData->detail_font_size) ? $blockData->detail_font_size : '' !!}; color: !! !empty($blockData->detail_font_color) ? $blockData->detail_font_color : '#000000' !!};">{!! $blockData->$detail !!}</p>
                            @endif
	                    </div>
                    </div>
                    @endif
                @endfor
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>