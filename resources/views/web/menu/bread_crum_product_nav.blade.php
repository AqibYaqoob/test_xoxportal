<div class="sub-header-2 container-fluid fixed-top">
    <div class="d-sm-flex align-items-center">
        <nav class="navbar navbar-expand mr-auto scroll">
            <ul class="navbar-nav">
                @foreach($items as $menu_item)
                    <li class="nav-item {{ Request::is(substr($menu_item->link(), 1)) ? 'active' : '' }}"><a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div class="quick-action">
            <button href="#" class="btn xp-btn xp-btn-sm mr-2">New Sign up</button>
            <button href="#" class="btn xp-btn xp-btn-sm" data-toggle="modal" data-target="#myModal">Port In</button>
        </div>
    </div>
</div>
