<!-- Get Deals Detail -->
@php
    $deals = App\Deal::with('deal_categories.deal_categories_details')->where('shortcode', $blockData->short_code)->first();
    $resutData = null;
    if($deals){
    	$resutData = $deals->toArray();
	}
@endphp
<div class="xp-section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_option) ? $blockData->container_option : 'container' !!} text-center">
    	@if(count($resutData['deal_categories']) > 0)
	    	<!-- Links of Category will Come here -->
	    	<div class="d-flex justify-content-center">
	            <ul class="nav nav-pills tab-menu">
	            	@foreach($resutData['deal_categories'] as $key => $value)
	                <li class="nav-item">
	                    <a class="nav-link {!! $key == 0 ? 'active' : ''!!}" data-toggle="pill" href="#{{ $resutData['shortcode'] }}{{$value['id']}}">{{ $value['category_name'] }}</a>
	                </li>
	                @endforeach
	            </ul>
	        </div>
	        <div class="div-h40 div-lg-80"></div>
	        <div class="tab-content">
	        	@foreach($resutData['deal_categories'] as $key => $value)
	                <div class="tab-pane {!! $key == 0 ? 'active' : ''!!}" id="{{ $resutData['shortcode'] }}{{$value['id']}}">
	                	<div class="xp-hide xp-md-show">
		                	<div class="plans-container {!! !empty($blockData->deals_type) ? $blockData->deals_type : 'default-plan-items' !!} d-flex justify-content-center">
		                		@foreach($value['deal_categories_details'] as $categoryKey => $categoryValue)
		                		<div class="mb-5">
		                			<div class="plan-item">
		                                {!! $categoryValue['content'] !!}
		                            </div>
		                            @if(!empty($categoryValue['app_link']) ||  !empty($categoryValue['sms_code']))
			                            <div class="mt-2 d-flex plan-item-action">
			                                <p class="flex-even"><a href="{!! !empty($blockData->app_link) ? $blockData->app_link : '#' !!}">Get from <br />App</a></p>
			                                <p class="flex-even"><a href="#" data-toggle="collapse" data-target="{!! !empty($categoryValue['sms_code']) ? '#sms'.$categoryValue['id'] : '' !!}">Get from <br />SMS</a></p>
			                            </div>
		                            @endif
		                            @if(!empty($categoryValue['sms_code']))
			                            <div id="sms{{$categoryValue['id']}}" class="my-2 collapse bold">
			                                {!! $categoryValue['sms_code'] !!}
			                            </div>
		                            @endif
		                        </div>    
		                		@endforeach
		                	</div>
	                	</div>	
	                </div>
	                <div class="xp-show xp-md-hide">
                        <div class="w-75 mx-auto default-plan-items">
                        	@foreach($value['deal_categories_details'] as $categoryKey => $categoryValue)
	                            <div class="plan-item">
	                                {!! $categoryValue['content'] !!}
	                            </div>
	                            @if(!empty($categoryValue['app_link']) ||  !empty($categoryValue['sms_code']))
		                            <div class="mt-2 d-flex plan-item-action">
		                                <p class="flex-even"><a href="{!! !empty($blockData->app_link) ? $blockData->app_link : '#' !!}">Get from <br />App</a></p>
			                                <p class="flex-even"><a href="#" data-toggle="collapse" data-target="{!! !empty($categoryValue['sms_code']) ? '#sms'.$categoryValue['id'] : '' !!}">Get from <br />SMS</a>
			                            </p>
		                            </div>
	                            @endif
	                            @if(!empty($categoryValue['sms_code']))
		                            <div id="sms{{$categoryValue['id']}}" class="my-2 collapse bold">
		                                {!! $categoryValue['sms_code'] !!-}
		                            </div>
	                            @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>        	
        @endif
    </div>		
</div>    	
    		