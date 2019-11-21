<div class="section text-center" style="background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#000000' !!}; padding-top: {!! !empty($blockData->section_padding_top) ? $blockData->section_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->section_padding_bottom) ? $blockData->section_padding_bottom : '10px' !!};">
    <div class="{!! !empty($blockData->container_type) ? $blockData->container_type : 'container' !!}">
        <select name="sources" id="sources" class="custom-select-new sources" placeholder="Choose...">
            @php
                if(!empty($blockData->options)){
                    $detail_array = $blockData->options;
                    $arr = explode(",",$detail_array);
                    $desireArray = array();
                    foreach($arr as $value)
                    {
                        $val = explode("-",$value);
                        if(count($val) > 1)
                        {
                @endphp        
                        <option value="{!! isset($val[0]) ? $val[0] : '' !!}">{!! isset($val[1]) ? $val[1] : '' !!}</option>
                @php        
                        }
                    }
                }
            @endphp
        </select>
        @if($blockData->buttons)
            <div class="div-h40"></div>
            <div class="d-flex justify-content-center">
                @for ($i = 1; $i <= 3; $i++)
                    @php
                       $button_link = 'button_'.$i.'_link'; 
                       $button_text = 'button_'.$i.'_text'; 
                    @endphp
                    @if(!empty($blockData->$button_link ))
                        <div class="btn-box mb-3 ml-3">
                            <a class="btn btn-validate" href="{!! $blockData->$button_link ? $button_link : '' !!}">{!! $blockData->$button_text !!}</a>
                        </div>
                    @endif
                @endfor
            </div>
        @endif
    </div>
</div>        