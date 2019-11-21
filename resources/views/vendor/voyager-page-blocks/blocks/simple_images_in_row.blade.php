<div class="xp-section" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!}">
        <div class="xp-hide xp-lg-show">
            <div class="row" style="padding-top: {!! !empty($blockData->row_padding_top) ? $blockData->row_padding_top : '3rem' !!} !important; padding-bottom: {!! !empty($blockData->row_padding_bottom) ? $blockData->row_padding_bottom : '3rem' !!} !important;">
                @for ($i = 1; $i <= 8; $i++)
                    @php
                        $image_src = 'image_'.$i;
                    @endphp
                    @if (!empty($blockData->$image_src))
                    <div class="{!! !empty($blockData->column_no) ? $blockData->column_no : 'col-md-3' !!}">
                        <div class="d-flex flex-column align-items-center">
                            <img class="w-auto mb-2" src="{{ asset('storage/'.$blockData->$image_src) }}" style="height: {!! !empty($blockData->image_height) ? $blockData->image_height : '250px' !!}" />
                            <h4 class="mb-2">Carry Forward<br />&amp; Zero Wastage</h4>
                            <p>Your unused data, minutes, and sms will never be fortified</p>
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
                    @endphp
                    @if (!empty($blockData->$image_src))
                    <div class="swiper-slide p-4">
                        <div class="d-flex flex-column align-items-center">
                         <img src="{{ asset('storage/'.$blockData->$image_src) }}" style="width: 250px; height: {!! !empty($blockData->image_height) ? $blockData->image_height : '250px' !!}" />
                         <h4 class="mb-2">Carry Forward<br />&amp; Zero Wastage</h4>
                            <p>Your unused data, minutes, and sms will never be fortified</p>
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