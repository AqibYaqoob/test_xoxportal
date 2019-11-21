<div class="col-md-2">
    <ul style="list-style-type: none;list-style: none;color: black;width: 20%"><li>
        @foreach($items as $menu_item)
            <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        @endforeach
            </li>
    </ul>
</div>
