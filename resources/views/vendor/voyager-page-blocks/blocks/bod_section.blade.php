@php
    $exec = App\Bod::where('order_on_page', '=', 1)->get()->toArray();
    $dir = App\Bod::where('order_on_page', '=', 0)->get()->toArray();
@endphp 
<div class="xp-section bg-white py-100" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '' !!};">
    <div class="container" style="background-color: {!! !empty($blockData->bod_background_color) ? $blockData->bod_background_color : '' !!};">
        @foreach($exec as $key => $value)
            <div class="d-flex flex-1 py-50" style="color: {!! !empty($blockData->text_color) ? $blockData->text_color : '' !!};">
                <div class="text-center mb-5">
                    <h4><i>{{ $value['name'] }}</i></h4>
                    <h5><i>{{ $value['position'] }}</i></h5>
                    <div class="text-right bold">
                        <a href="{{ url('board-of-director/detail/'.$value['category_slug']) }}" class="red" style="color: rgb(230, 84, 84) !important;">> More</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            @foreach($dir as $key => $value)
                <div class="col-sm-4 mb-5" style="color: {!! !empty($blockData->text_color) ? $blockData->text_color : '' !!};">
                    <div class="text-center bold">
                        <h5><i>>{{ $value['name'] }}</i></h5>
                        <h6><i>{{ $value['position'] }}</i></h6>
                        <div class="text-right bold">
                            <a href="{{ url('board-of-director/detail/'.$value['category_slug']) }}" class="red">> More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>                    