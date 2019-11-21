<!-- New Slider Options -->
<section class="banner-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if (!empty($blockData->slider_image_1) && $blockData->slider_image_1 != "")
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            @endif
            @if (!empty($blockData->slider_image_2) && $blockData->slider_image_2 != "")
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            @endif
            @if (!empty($blockData->slider_image_3) && $blockData->slider_image_3 != "")
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            @endif
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            @if (!empty($blockData->slider_image_1) && $blockData->slider_image_1 != "")
                <div class="carousel-item active" style="background-image: url('{!! asset('storage/'.$blockData->slider_image_1) !!}') !important; background-color: {!! !empty($blockData->slider_1_background_clr) ? $blockData->slider_1_background_clr : '' !!};">
                    <div class="carousel-content">
                        <div class="container px-5 px-lg-0">
                            <div class="row">
                                @if(!empty($blockData->slider_1_text_align) && $blockData->slider_1_text_align == 'right')
                                <div class="col-lg-6"></div>
                                @endif
                                <div class="col-lg-6 text-center text-lg-left">
                                    @if (!empty($blockData->slider_image_1_heading))
                                        <h1 class="banner-title" style="font-size: {!! !empty($blockData->slider_image_1_heading_size) ? $blockData->slider_image_1_heading_size : '4rem' !!} !important; color: {!! !empty($blockData->slider_image_1_heading_clr) ? $blockData->slider_image_1_heading_clr : '' !!} !important;">{!! $blockData->slider_image_1_heading!!}</h1>
                                    @endif
                                    @if (!empty($blockData->slider_image_1_p))
                                        <p class="banner-paragraph" style="font-size: {!! !empty($blockData->slider_image_1_p_size) ? $blockData->slider_image_1_p_size : '1rem' !!} !important; color: {!! !empty($blockData->slider_image_1_p_clr) ? $blockData->slider_image_1_p_clr : '' !!} !important;">{!! $blockData->slider_image_1_p !!}</p>
                                    @endif
                                    @php
                                        $linkClass = 'btn-link-lg';
                                    @endphp    
                                    @if (!empty($blockData->slider_image_1_link))
                                    @php
                                        if(!empty($blockData->slider_1_link_type) && $blockData->slider_1_link_type == 'btn-box mb-3'){
                                            $linkClass = 'btn';
                                        }
                                    @endphp
                                    @if($linkClass != 'btn-link-lg')
                                    <div class="d-flex">
                                    @endif    
                                    <div class="{!! !empty($blockData->slider_1_link_type) ? $blockData->slider_1_link_type : 'link' !!}">
                                        <a href="{!! url($blockData->slider_image_1_link) !!}" class="{{ $linkClass }}" style="color: {!! !empty($blockData->slider_image_1_link_text_color) ? $blockData->slider_image_1_link_text_color : '' !!} !important;">{!! $blockData->slider_image_1_link_text !!}</a>
                                    </div>
                                    @endif
                                    @if($linkClass != 'btn-link-lg')
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Slide Two - Set the background image for this slide in the line below -->
            @if (!empty($blockData->slider_image_2) && $blockData->slider_image_2 != "")
                <div class="carousel-item active" style="background-image: url('{!! asset('storage/'.$blockData->slider_image_2) !!}') !important; background-color: {!! !empty($blockData->slider_2_background_clr) ? $blockData->slider_2_background_clr : '' !!};">
                    <div class="carousel-content">
                        <div class="container px-5 px-lg-0">
                            <div class="row">
                                @if(!empty($blockData->slider_2_text_align) && $blockData->slider_2_text_align == 'right')
                                <div class="col-lg-6"></div>
                                @endif
                                <div class="col-lg-6 text-center text-lg-left">
                                    @if (!empty($blockData->slider_image_2_heading))
                                        <h1 class="banner-title" style="font-size: {!! !empty($blockData->slider_image_2_heading_size) ? $blockData->slider_image_2_heading_size : '4rem' !!} !important; color: {!! !empty($blockData->slider_image_2_heading_clr) ? $blockData->slider_image_2_heading_clr : '' !!} !important;">{!! $blockData->slider_image_2_heading!!}</h1>
                                    @endif
                                    @if (!empty($blockData->slider_image_2_p))
                                        <p class="banner-paragraph" style="font-size: {!! !empty($blockData->slider_image_2_p_size) ? $blockData->slider_image_2_p_size : '1rem' !!} !important; color: {!! !empty($blockData->slider_image_2_p_clr) ? $blockData->slider_image_2_p_clr : '' !!} !important;">{!! $blockData->slider_image_2_p !!}</p>
                                    @endif    
                                    @php
                                        $linkClass = 'btn-link-lg';
                                    @endphp
                                    @if (!empty($blockData->slider_image_2_link))
                                    @php
                                        if(!empty($blockData->slider_2_link_type) && $blockData->slider_2_link_type == 'btn-box mb-3'){
                                            $linkClass = 'btn';
                                        }
                                    @endphp
                                    @if($linkClass != 'btn-link-lg')
                                    <div class="d-flex">
                                    @endif    
                                    <div class="{!! !empty($blockData->slider_2_link_type) ? $blockData->slider_2_link_type : 'link' !!}">
                                        <a href="{!! url($blockData->slider_image_2_link) !!}" class="{{ $linkClass }}" style="color: {!! !empty($blockData->slider_image_2_link_text_color) ? $blockData->slider_image_2_link_text_color : '' !!} !important;">{!! $blockData->slider_image_2_link_text !!}</a>
                                    </div>
                                    @endif
                                    @if($linkClass != 'btn-link-lg')
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Slide Three - Set the background image for this slide in the line below -->
            @if (!empty($blockData->slider_image_3) && $blockData->slider_image_3 != "")
                <div class="carousel-item active" style="background-image: url('{!! asset('storage/'.$blockData->slider_image_3) !!}') !important; background-color: {!! !empty($blockData->slider_3_background_clr) ? $blockData->slider_3_background_clr : '' !!};">
                    <div class="carousel-content">
                        <div class="container px-5 px-lg-0">
                            <div class="row">
                                @if(!empty($blockData->slider_3_text_align) && $blockData->slider_3_text_align == 'right')
                                <div class="col-lg-6"></div>
                                @endif
                                <div class="col-lg-6 text-center text-lg-left">
                                    @if (!empty($blockData->slider_image_3_heading))
                                        <h1 class="banner-title" style="font-size: {!! !empty($blockData->slider_image_3_heading_size) ? $blockData->slider_image_3_heading_size : '4rem' !!} !important; color: {!! !empty($blockData->slider_image_3_heading_clr) ? $blockData->slider_image_3_heading_clr : '' !!} !important;">{!! $blockData->slider_image_3_heading!!}</h1>
                                    @endif
                                    @if (!empty($blockData->slider_image_3_p))
                                        <p class="banner-paragraph" style="font-size: {!! !empty($blockData->slider_image_3_p_size) ? $blockData->slider_image_3_p_size : '1rem' !!} !important; color: {!! !empty($blockData->slider_image_3_p_clr) ? $blockData->slider_image_3_p_clr : '' !!} !important;">{!! $blockData->slider_image_3_p !!}</p>
                                    @endif
                                    @php
                                        $linkClass = 'btn-link-lg';
                                    @endphp    
                                    @if (!empty($blockData->slider_image_3_link))
                                    @php
                                        if(!empty($blockData->slider_3_link_type) && $blockData->slider_3_link_type == 'btn-box mb-3'){
                                            $linkClass = 'btn';
                                        }
                                    @endphp
                                    @if($linkClass != 'btn-link-lg')
                                    <div class="d-flex">
                                    @endif    
                                    <div class="{!! !empty($blockData->slider_3_link_type) ? $blockData->slider_3_link_type : 'link' !!}">
                                        <a href="{!! url($blockData->slider_image_3_link) !!}" class="{{ $linkClass }}" style="color: {!! !empty($blockData->slider_image_3_link_text_color) ? $blockData->slider_image_3_link_text_color : '' !!} !important;">{!! $blockData->slider_image_3_link_text !!}</a>
                                    </div>
                                    @endif
                                    @if($linkClass != 'btn-link-lg')
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>