<div class="xp-section py-4" style="background-color: {!! !empty($blockData->background_color) ? $blockData->background_color : '#F3F3F3' !!};">
    <div class="container">
        <div class="row py-50 py-sm-90">
            <div class="col-sm-12 text-center mb-4">
                @if (!empty($blockData->heading))
                    <h1 class="xp-title mb-3">{!! $blockData->heading !!}</h1>
                @endif
                @if (!empty($blockData->content))
                    <p class="mb-4 fw-3">{!! $blockData->content !!}</p>
                @endif
                @if (!empty($blockData->link))     
                <div>
                    <a href="{{ $blockData->link }}" class="btn xp-btn xp-btn-lg">
                        {{ $blockData->button_text }}
                    </a>
                </div>
                @endif
            </div>
            <div class="xp-hide xp-lg-show" style="width: 100%">
                <div class="row">
                    <div class="col-md-3">
                        <div class="height: 250px; background-color: white;">
                            @if (!empty($blockData->image_1))
                                <img src="{{ imageUrl($blockData->image_1) }}" alt="{{ $blockData->link_1 }}">
                            @endif
                        </div>
                        @if (!empty($blockData->image_detail_1))
                        <p class="mt- ">{{ $blockData->image_detail_1 }}</p>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="height: 250px; background-color: white;">
                            @if (!empty($blockData->image_2))
                                <img src="{{ imageUrl($blockData->image_2) }}" alt="{{ $blockData->link_2 }}">
                            @endif
                        </div>
                        @if (!empty($blockData->image_detail_2))
                        <p class="mt-3">{{ $blockData->image_detail_2 }}</p>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="height: 250px; background-color: white;">
                            @if (!empty($blockData->image_3))
                                <img src="{{ imageUrl($blockData->image_3) }}" alt="{{ $blockData->link_3 }}">
                            @endif
                        </div>
                        @if (!empty($blockData->image_detail_3))
                        <p class="mt-3">{{ $blockData->image_detail_3 }}</p>
                        @endif
                    </div>
                    <div class="col-md-3">
                    <div class="height: 250px; background-color: white;">
                        @if (!empty($blockData->image_4))
                            <img src="{{ imageUrl($blockData->image_4) }}" alt="{{ $blockData->link_4 }}">
                        @endif
                    </div>
                    @if (!empty($blockData->image_detail_4))
                        <p class="mt-3">{{ $blockData->image_detail_4 }}</p>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>