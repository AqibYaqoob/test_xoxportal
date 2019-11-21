<div class="xp-section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_option) ? $blockData->container_option : 'container' !!} text-center">
    	<!-- Plans Details will come here -->
    	<div class="xp-hide xp-lg-show">
    		<div class="plans-container d-flex flex-1">
    		@for ($i = 1; $i <= 5; $i++)
                @php
                    $is_active = 'is_active_'.$i;
                    $title = 'title_'.$i;
                    $detail = 'detail_'.$i;
                    $total = 'total_'.$i;
                    $gradient_color = !empty($blockData->plan_card_background_gradient_colors) ? 'linear-gradient(to bottom,'.$blockData->plan_card_background_gradient_colors.')' : 'linear-gradient(to bottom,#5659AD,#36396F)';
                @endphp
                @if (!empty($blockData->$title))
                    <div class="plan-item {!! $blockData->$is_active ? 'active' : '' !!}" style="background-image: {!! $gradient_color !!} !important;">
                        <h3 class="plan-name mb-4">{!! !empty($blockData->$title) ? $blockData->$title : '' !!}</h3>
                        <div class="plan-details">
                        	@if(!$blockData->plan_type)
                        		@php
	                        		$detail_array = $blockData->$detail;
								    $arr = explode(",",$detail_array);
								    $desireArray = array();
								    foreach($arr as $value)
								    {
								        $val = explode("-",$value);
								        if(count($val) > 1)
								        {
								@endphp        
								    <div class="d-flex justify-content-between mb-1">
	                                    <span>{!! isset($val[0]) ? $val[0] : '' !!}</span>
	                                    <span>{!! isset($val[1]) ? $val[1] : '' !!}</span>
	                                </div>
	                            @php        
								        }
								    }
							    @endphp
							@else
							    <p class="textbox">{!! !empty($blockData->$detail) ? $blockData->$detail : '' !!}</p>
                			@endif
                        </div>
                        <div class="plan-footer d-flex flex-1 mt-3">
                            <h2>{!! !empty($blockData->$total) ? $blockData->$total : '' !!}</h2>
                        </div>
                    </div>    
                @endif
            @endfor
    		</div>	
    	</div>
    	<!-- Plan Scroller -->
    	<div class="swiper-container xp-show xp-lg-hide plan-container-mobile esim-plan-items">
    		<div class="swiper-wrapper">
    			@for ($i = 1; $i <= 5; $i++)
                @php
                    $is_active = 'is_active_'.$i;
                    $title = 'title_'.$i;
                    $detail = 'detail_'.$i;
                    $total = 'total_'.$i;
                    $gradient_color = !empty($blockData->plan_card_background_gradient_colors) ? 'linear-gradient(to bottom,'.$blockData->plan_card_background_gradient_colors.')' : 'linear-gradient(to bottom,#5659AD,#36396F)';
                @endphp
                @if (!empty($blockData->$title))
                <div class="swiper-slide p-4">
                    <div class="plan-item {!! $blockData->$is_active ? 'active' : '' !!}" style="background-image: {!! $gradient_color !!} !important;">
                        <h3 class="plan-name mb-4">{!! !empty($blockData->$title) ? $blockData->$title : '' !!}</h3>
                        <div class="plan-details">
                        	@if(!$blockData->plan_type)
                        		@php
	                        		$detail_array = $blockData->$detail;
								    $arr = explode(",",$detail_array);
								    $desireArray = array();
								    foreach($arr as $value)
								    {
								        $val = explode("-",$value);
								        if(count($val) > 1)
								        {
								@endphp        
								    <div class="d-flex justify-content-between mb-1">
	                                    <span>{!! isset($val[0]) ? $val[0] : '' !!}</span>
	                                    <span>{!! isset($val[1]) ? $val[1] : '' !!}</span>
	                                </div>
	                            @php        
								        }
								    }
							    @endphp
							@else
							    <p class="textbox">{!! !empty($blockData->$detail) ? $blockData->$detail : '' !!}</p>
                			@endif
                        </div>
                        <div class="plan-footer d-flex flex-1 mt-3">
                            <h2>{!! !empty($blockData->$total) ? $blockData->$total : '' !!}</h2>
                        </div>
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
    	<!-- Initialize Swiper -->
    	<script type="text/javascript" src="{{ url('js/swiper.min.js') }}"></script>
        <script>
            var swiper = new Swiper('.plan-container-mobile', {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>	
    </div>		
</div>    	
    		