<div class="xp-section" style="
    background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#212529' !!};
    padding-top: {!! !empty($blockData->padding_top) ? $blockData->padding_top : '10px' !!};
    padding-bottom: {!! !empty($blockData->padding_bottom) ? $blockData->padding_bottom : '10px' !!};
    justify-content: {!! !empty($blockData->justify_content) ? $blockData->justify_content : '10px' !!};
    display: flex!important;">
    <div class="action-container">
        <div class="d-flex flex-column flex-sm-row" >
            <div class="btn-action">
                @if (!empty($blockData->link1))
                    <a style="border-color:{!! !empty($blockData->border_color) ? $blockData->border_color : '#4dc0b5' !!};
                       padding-bottom: 5px"
                       href="{{ $blockData->link1 }}" class="btn">
                        <p style=" color:{!! !empty($blockData->border_color) ? $blockData->border_color : '#4dc0b5' !!};font-size: 18px;text-align: center;">   {{ $blockData->button1_text }}</p>
                    </a>
                @endif
            </div>
            <div class="flex-even px-4">
                @if (!empty($blockData->link2))
                    <a style=
                       "   padding-bottom: 5px;border-color:{!! !empty($blockData->border_color) ? $blockData->border_color : '#4dc0b5' !!};" href="{{ $blockData->link2 }}" class="btn">
                        <p style="font-size: 18px;color:{!! !empty($blockData->border_color) ? $blockData->border_color : '#4dc0b5' !!};"> {{ $blockData->button2_text }}</p>
                    </a>

                @endif
            </div>
        </div>
    </div></div>


</div>
