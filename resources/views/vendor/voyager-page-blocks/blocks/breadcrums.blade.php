<div class="xp-subheader">
    <div class="container">
        <div class="d-sm-flex align-items-center">
            <nav class="navbar navbar-expand mr-auto scroll">
                <ul class="navbar-nav">
                    {{ menu('products_nav','web.menu.bread_crum_product_nav') }}
                </ul>
            </nav>
            <div class="quick-action">
                @if (!empty($blockData->first_button_link))     
                    <a href="{{ $blockData->first_button_link }}" class="btn xp-btn xp-btn-sm mr-2">{{ $blockData->first_button_text }}
                    </a>
                @endif
                @if (!empty($blockData->second_button_link))     
                    <a href="{{ $blockData->second_button_link }}" class="btn xp-btn xp-btn-sm">{{ $blockData->second_button_text }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>