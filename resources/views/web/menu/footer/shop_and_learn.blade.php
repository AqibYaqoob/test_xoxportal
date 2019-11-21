<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
    <h5 class="mb-4">Shop & Learn</h5>
    <div class="row">
        <div class="col-md-6" style="text-align: left;color: black">
            <ul style="list-style-type: none;color: black;">
            @foreach($items as $menu_item)
                    <li>   <a style="line-height: 28px;font-size: 17px;" href="{{ $menu_item->link() }}">
                            {{ $menu_item->title }} </a> </li>
                   @endforeach
                </ul>
                  </div>
        <div class="" style="font-size: 17px;">
            <ul style="list-style-type: none;list-style: none">
            <a style="color: #0a0a0a;line-height: 40px;color:black ;font-size: 17px;list-style-type: none" href="">
                {{menu('shop&learn')}}
            </a>
            </ul>
        </div>
    </div>
</div>