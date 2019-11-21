<div id="main">
  <section class="section text-center">
    <div class=""></div>
    <div class="{!! !empty($blockData->container_option != "unset") ? $blockData->container_option : 'Unset' !!} text-center">
      <div class="xp-section" style="padding-top: {!! !empty($blockData->padding_top) ? $blockData->padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->padding_bottom) ? $blockData->padding_bottom : '10px' !!}; background-color: {!! !empty($blockData->section_background_color) ? $blockData->section_background_color : '#212529' !!};">
        <div style="padding-top: {!! !empty($blockData->text_padding_top) ? $blockData->text_padding_top : '10px' !!}; padding-bottom: {!! !empty($blockData->text_padding_bottom) ? $blockData->text_padding_bottom : '10px' !!};">
            @if (!empty($blockData->i_frame))
              <iframe class="fast-screen w-100" style="height: 550px" src="{{$blockData->i_frame}}"></iframe>
            @endif
        </div>
      </div>
    </div>
    <div class="div-h100"></div>
  </section>
</div>