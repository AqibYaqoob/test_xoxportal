<section class="banner-section">
    <div class="banner-item" style="background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '' !!}; height: {!! !empty($blockData->banner_height) ? $blockData->banner_height : '100vh' !!} !important;">
        <div class="banner-content text-center d-flex flex-column flex-1" style="justify-content: {!! !empty($blockData->content_position) ? $blockData->content_position : 'center' !!} !important; align-items: {!! !empty($blockData->content_position) ? $blockData->content_position : 'center' !!} !important;">
        	<!-- Content Inside Banner will come here -->
        	<!-- 1) Check Banner Type  (Having 2 images, 1 image, Only text and image) etc -->
        	<!-- [1 => 'Only Text', 2 => 'Only Image', 3 => 'Image and Text', 4 => '2 Images'] -->
        	<div class="p-1">
			@if(!empty($blockData->banner_type))
        		@if($blockData->banner_type == 1)
        			<div class="m-4 p-2" style="background-color: {!! $blockData->title_background_color_flag ? ($blockData->opacity_text_background ? 'rgba(0,0,0,0.7)' : $blockData->title_background_color ) : 'unset' !!};">
        				@if(!empty($blockData->title))
		                	<h1 class="banner-title" style="font-size: {!! !empty($blockData->title_size) ? $blockData->title_size : '4rem' !!} !important; color: {!! !empty($blockData->title_color) ? $blockData->title_color : '' !!}; padding-top: {!! !empty($blockData->title_padding_top) ? $blockData->title_padding_top : '' !!}; padding-bottom: {!! !empty($blockData->title_padding_bottom) ? $blockData->title_padding_bottom : '' !!} !important">
		                		{!! $blockData->title !!}
		                	</h1>
		                @endif
		                @if(!empty($blockData->detail))
			                <p class="banner-paragraph" style="font-size: {!! !empty($blockData->detail_size) ? $blockData->detail_size : '4rem' !!} !important; color: {!! !empty($blockData->detail_color) ? $blockData->detail_color : '' !!};">
			                	{!! $blockData->detail !!}
			                </p>
		                @endif
		            </div>
			</div>
		            @if(!empty($blockData->buttons) && $blockData->buttons)
			            <div class="d-flex justify-content-center">
			            	@if(!empty($blockData->button_1_link))
			            		@php
			            			$defaultButtonBorderColor = "3px solid #000000;";
			            			$defaultButtonColor = "#000000";
			            			if(!empty($blockData->button_1_color)){
			            				$defaultButtonBorderColor = "3px solid ".$blockData->button_1_color;
			            				$defaultButtonColor = $blockData->button_1_color;
			            			}
			            		@endphp
		                        <div class="btn-box mb-3" style="border: {!! $defaultButtonBorderColor !!} !important;">
		                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_1_link) !!}">{!! $blockData->button_1_text !!}</a>
		                        </div>
	                        @endif
	                        @if(!empty($blockData->button_2_link))
	                        	@php
			            			$defaultButtonBorderColor = "3px solid #000000;";
			            			$defaultButtonColor = "#000000";
			            			if(!empty($blockData->button_2_color)){
			            				$defaultButtonBorderColor = "3px solid ".$blockData->button_2_color;
			            				$defaultButtonColor = $blockData->button_2_color;
			            			}
			            		@endphp
		                        <div class="btn-box mb-3 ml-3" style="border: {!! $defaultButtonBorderColor !!} !important;">
		                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_2_link) !!}">{!! $blockData->button_2_text !!}</a>
		                        </div>
	                        @endif
	                    </div>
                    @endif
		        @elseif($blockData->banner_type == 2)
		        	<img class="img-fluid" src="{!! !empty($blockData->image) ? imageUrl($blockData->image, 1600, 750, ['crop' => false]) : '' !!}" />
		        	@if(!empty($blockData->buttons) && $blockData->buttons)
			            <div class="d-flex justify-content-center">
			            	@if(!empty($blockData->button_1_link))
			            		@php
			            			$defaultButtonBorderColor = "3px solid #000000;";
			            			$defaultButtonColor = "#000000";
			            			if(!empty($blockData->button_1_color)){
			            				$defaultButtonBorderColor = "3px solid ".$blockData->button_1_color;
			            				$defaultButtonColor = $blockData->button_1_color;
			            			}
			            		@endphp
		                        <div class="btn-box mb-3" style="border: {!! $defaultButtonBorderColor !!};">
		                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_1_link) !!}">{!! $blockData->button_1_text !!}</a>
		                        </div>
	                        @endif
	                        @if(!empty($blockData->button_2_link))
	                        	@php
			            			$defaultButtonBorderColor = "3px solid #000000;";
			            			$defaultButtonColor = "#000000";
			            			if(!empty($blockData->button_2_color)){
			            				$defaultButtonBorderColor = "3px solid ".$blockData->button_2_color;
			            				$defaultButtonColor = $blockData->button_2_color;
			            			}
			            		@endphp
		                        <div class="btn-box mb-3 ml-3" style="border: {!! $defaultButtonBorderColor !!};">
		                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_2_link) !!}">{!! $blockData->button_2_text !!}</a>
		                        </div>
	                        @endif
	                    </div>
                    @endif
		        @else
		        	<div class="container px-5 px-lg-0">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-center text-lg-left">
                                @if(!empty($blockData->title))
				                	<h1 class="banner-title" style="font-size: {!! !empty($blockData->title_size) ? $blockData->title_size : '4rem' !!} !important; color: {!! !empty($blockData->title_color) ? $blockData->title_color : '' !!}; ; padding-top: {!! !empty($blockData->title_padding_top) ? $blockData->title_padding_top : '' !!}; padding-bottom: {!! !empty($blockData->title_padding_bottom) ? $blockData->title_padding_bottom : '' !!} !important">
				                		{!! $blockData->title !!}
				                	</h1>
				                @endif
				                @if(!empty($blockData->detail))
					                <p class="banner-paragraph" style="font-size: {!! !empty($blockData->detail_size) ? $blockData->detail_size : '4rem' !!} !important; color: {!! !empty($blockData->detail_color) ? $blockData->detail_color : '' !!};">
					                	{!! $blockData->detail !!}
					                </p>
				                @endif
				                @if(!empty($blockData->buttons) && $blockData->buttons)
						            <div class="d-flex justify-content-center">
						            	@if(!empty($blockData->button_1_link))
						            		@php
						            			$defaultButtonBorderColor = "3px solid #000000;";
						            			$defaultButtonColor = "#000000";
						            			if(!empty($blockData->button_1_color)){
						            				$defaultButtonBorderColor = "3px solid ".$blockData->button_1_color;
						            				$defaultButtonColor = $blockData->button_1_color;
						            			}
						            		@endphp
					                        <div class="btn-box mb-3" style="border: {!! $defaultButtonBorderColor !!};">
					                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_1_link) !!}">{!! $blockData->button_1_text !!}</a>
					                        </div>
				                        @endif
				                        @if(!empty($blockData->button_2_link))
				                        	@php
						            			$defaultButtonBorderColor = "3px solid #000000;";
						            			$defaultButtonColor = "#000000";
						            			if(!empty($blockData->button_2_color)){
						            				$defaultButtonBorderColor = "3px solid ".$blockData->button_2_color;
						            				$defaultButtonColor = $blockData->button_2_color;
						            			}
						            		@endphp
					                        <div class="btn-box mb-3 ml-3" style="border: {!! $defaultButtonBorderColor !!};">
					                            <a style = "color: {!! $defaultButtonColor !!};" class="btn" href="{!! url($blockData->button_2_link) !!}">{!! $blockData->button_2_text !!}</a>
					                        </div>
				                        @endif
				                    </div>
			                    @endif
                            </div>
                            <div class="col-lg-7 xp-hide xp-lg-show">
                            	@if(!empty($blockData->image))
                                	<img class="w-100" src="{!! !empty($blockData->image) ? imageUrl($blockData->image, 1600, 750, ['crop' => false]) : '' !!}" />
                                @endif
                            </div>
                        </div>
                    </div>
        		@endif
        	@endif
        </div>
    </div>
</section>
