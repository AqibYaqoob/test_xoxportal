<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
    <h5 class="mb-4">About Us</h5>
    <div class="row">
        <div class="col-12">
            <ul style="list-style-type: none;list-style: none;color: black;"><li>
            @foreach($items as $menu_item)
                <a style="line-height: 40px;font-size: 17px" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></br>
        @endforeach
                </li></ul>
        </div>
    </div>
</div>
