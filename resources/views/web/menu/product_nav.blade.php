
    <div class="d-sm-flex align-items-center">
        <nav class="navbar navbar-expand mr-auto scroll">
        <ul class="navbar-nav">
            @foreach($items as $menu_item)
                <li class="nav-item {{ Request::is(substr($menu_item->link(), 1)) ? 'active' : '' }}"><a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
            @endforeach
        </ul>
        </nav>
    </div>
