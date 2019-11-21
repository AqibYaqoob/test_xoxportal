@php
    $defaultImage1 = 'images/sylwia-bartyzel-D2K1UZr4vxk-unsplash.jpg';
    $defaultImage2 = 'images/nik-macmillan-YXemfQiPR_E-unsplash.jpg';
@endphp
<div class="xp-section py-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-deck text-center">
                    <div class="card xp-dark-card" style="border: unset !important; background-image: url('{!! !empty($blockData->card_content_background_image_1) ? imageUrl($blockData->card_content_background_image_1, 1600, 750, ['crop' => false]) : $defaultImage1 !!}') !important;">
                        <div>
                            @if (!empty($blockData->heading_card_1))
                                <h1 class="card-title">{!! $blockData->heading_card_1 !!}</h1>
                            @endif
                            @if (!empty($blockData->content_card_1))
                                <p>{!! $blockData->content_card_1 !!}</p>
                            @endif
                            @if (!empty($blockData->card_button_link_1))     
                            <div>
                                <a href="{{ $blockData->card_button_link_1 }}" class="btn xp-btn">
                                    {{ $blockData->card_button_text_1 }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card xp-dark-card" style="border: unset !important; background-image: url('{!! !empty($blockData->card_content_background_image_2) ? imageUrl($blockData->card_content_background_image_2, 1600, 750, ['crop' => false]) : $defaultImage2 !!}') !important;">
                        <div>
                            @if (!empty($blockData->heading_card_2))
                                <h1 class="card-title">{!! $blockData->heading_card_2 !!}</h1>
                            @endif
                            @if (!empty($blockData->content_card_2))
                                <p>{!! $blockData->content_card_2 !!}</p>
                            @endif
                            @if (!empty($blockData->card_button_link_2))     
                            <div>
                                <a href="{{ $blockData->card_button_link_2 }}" class="btn xp-btn">
                                    {{ $blockData->card_button_text_2 }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>