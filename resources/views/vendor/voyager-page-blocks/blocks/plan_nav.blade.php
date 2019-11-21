<div id="header" class="">
    <div class="sub-header container-fluid">
        <div class="d-sm-flex align-items-center">
            <nav class="navbar navbar-expand mr-auto scroll">
                <ul class="navbar-nav">
                    {{ menu('plan_nav','web.menu.just_for_u') }}
                </ul>
            </nav>
            <div class="quick-action">
                @if (!empty($blockData->first_button_link))
                    <button href="{{ $blockData->first_button_link }}" class="btn xp-btn xp-btn-sm mr-2">{{ $blockData->first_button_text }}</button>
                @endif
                @if (!empty($blockData->second_button_link))
                    <button href="{{ $blockData->second_button_link }}" class="btn xp-btn xp-btn-sm" data-toggle="modal" data-target="#myModal">{{ $blockData->second_button_text }}</button>
                @endif
            </div>
        </div>
    </div>
    <div class="sub-header-2 container-fluid">
        <div class="d-sm-flex align-items-center">
            <nav class="navbar navbar-expand mr-auto scroll">
                <ul class="navbar-nav">
                    {{ menu('plan_nav','web.menu.just_for_u') }}
                </ul>
            </nav>
            <div class="quick-action">
                 @if (!empty($blockData->first_button_link))
                    <button href="{{ $blockData->first_button_link }}" class="btn xp-btn xp-btn-sm mr-2">{{ $blockData->first_button_text }}</button>
                @endif
                @if (!empty($blockData->second_button_link))
                    <button href="{{ $blockData->second_button_link }}" class="btn xp-btn xp-btn-sm" data-toggle="modal" data-target="#myModal">{{ $blockData->second_button_text }}</button>
                @endif
            </div>
        </div>
    </div>
</div>    
