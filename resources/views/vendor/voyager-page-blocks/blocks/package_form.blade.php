<section id="section-activate" class="section section-activate py-100 py-lg-0" style="background-image: url('{!! !empty($blockData->section_background_image) ? imageUrl($blockData->section_background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="">
        <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!} px-lg-5">
            @php
                $form_position = !empty($blockData->form_position) ? $blockData->form_position : '0';
                $countryList = App\Country::get()->toArray();
                $plans = App\Plan::get()->toArray();
            @endphp
            <div class="d-flex flex-column flex-lg-row">
                <!-- Column Distribution -->
                @if($form_position == '1')
                    <div class="flex-even p-4 text-center white" style="background-color: rgba(0,0,0,.7);">
                            <h3 class="bold">Here's how to activate</h3>
                            <div class="div-h40"></div>
                            <div class="form-group">
                                <label class="control-label">Select Your Country</label>
                                <div class="select-box">
                                    <div class="select-box__current" tabindex="1">
                                        @foreach($countryList as $key => $value)
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="{{ $value['id'] }}" value="{{ $value['id'] }}" name="Ben" checked="{!! $key == 0 ? 'checked': '' !!}"/>
                                            <p class="select-box__input-text">{{ $value['name'] }}</p>
                                        </div>
                                        @endforeach
                                        <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
                                    </div>
                                    <ul class="select-box__list">
                                        @foreach($countryList as $key => $value)
                                        <li>
                                            <label class="select-box__option" for="{{ $value['id'] }}" aria-hidden="aria-hidden">{{ $value['name'] }}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">{!! $blockData->form_type == 1 ? 'Country Code' : 'Preferred Roaming Operator' !!}</label>
                                <div class="input-box">
                                    <div class="input-box__current">
                                    <input class="input-box__input-text text-center" type="text" placeholder="Auto Generate" name="{!! $blockData->form_type == 1 ? 'country_code' : 'roaming_operator' !!}" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label">Select Your Plan</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="2">
                                    @foreach($plans as $key => $value)
                                        <div class="select-box__value">
                                            <input class="select-box__input plans_option" type="radio" id="{{ $value['id'] }}" value="{{ $value['id'] }}" name="Nic" checked="{!! $key == 0 ? 'checked': '' !!}" />
                                            <p class="select-box__input-text">{{ $value['name'] }}</p>
                                        </div>
                                    @endforeach
                                    <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
                                </div>
                                <ul id="plan-select" class="select-box__list">
                                    @foreach($plans as $key => $value)
                                    <li>
                                        <label class="select-box__option" for="{{ $value['id'] }}" aria-hidden="aria-hidden">{{ $value['name'] }}</label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex-even d-flex flex-column justify-content-center text-center p-lg-5">
                        @if(!empty($blockData->text))
                            {!! $blockData->text !!}
                        @endif
                    </div>
                @endif
                <!-- Column Distribution -->
                @if($form_position == '1')
                    <div class="flex-even d-flex flex-column justify-content-center text-center p-lg-5">
                        @if(!empty($blockData->text))
                            {!! $blockData->text !!}
                        @endif
                    </div>                    
                @else
                    <div class="flex-even p-4 text-center white" style="background-color: rgba(0,0,0,.7);">
                        <h3 class="bold">Here's how to activate</h3>
                        <div class="div-h40"></div>
                        <div class="form-group">
                            <label class="control-label">Select Your Country</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    @foreach($countryList as $key => $value)
                                    <div class="select-box__value">
                                        <input class="select-box__input country_option" type="radio" id="{{ $value['id'] }}" value="{{ $value['id'] }}" name="Ben" checked="{!! $key == 0 ? 'checked': '' !!}"/>
                                        <p class="select-box__input-text">{{ $value['name'] }}</p>
                                    </div>
                                    @endforeach
                                    <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
                                </div>
                                <ul class="select-box__list">
                                    @foreach($countryList as $key => $value)
                                    <li>
                                        <label class="select-box__option" for="{{ $value['id'] }}" aria-hidden="aria-hidden">{{ $value['name'] }}</label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Preferred Roaming Operator</label>
                            <div class="input-box">
                                <div class="input-box__current">
                                <input class="input-box__input-text text-center" type="text" placeholder="Auto Generate" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Select Your Plan</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="2">
                                    @foreach($plans as $key => $value)
                                        <div class="select-box__value">
                                            <input class="select-box__input plans_option" type="radio" id="{{ $value['id'] }}" value="{{ $value['id'] }}" name="Nic" checked="{!! $key == 0 ? 'checked': '' !!}" />
                                            <p class="select-box__input-text">{{ $value['name'] }}</p>
                                        </div>
                                    @endforeach
                                    <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
                                </div>
                                <ul id="plan-select" class="select-box__list">
                                    @foreach($plans as $key => $value)
                                    <li>
                                        <label class="select-box__option" for="{{ $value['id'] }}" aria-hidden="aria-hidden">{{ $value['name'] }}</label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>    
        </div>
    </div>
</section>
<div class="xp-section pt-5 bg-white">
    <div class="container text-center">
        <div class="div-h20"></div>
        <div class="d-flex justify-content-center">
            <div class="py-3 px-5 mb-3 white bg-black">
                <h2 class="mb-0 gotham-bold">HOW to suscribe?</h2>
            </div>
        </div>
        <div class="plan_images">
            @if(count($plans) > 0)
                <img class="img-fluid" src="{!! $plans[0]['image'] !!}">
            @endif    
        </div>
    </div>
</div>    