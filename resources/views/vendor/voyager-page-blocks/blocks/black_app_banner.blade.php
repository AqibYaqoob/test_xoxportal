<div class="section section-blackapp position-relative" style="background-image: url('{!! !empty($blockData->background_image) ? imageUrl($blockData->background_image, 1600, 750, ['crop' => false]) : '' !!}') !important; background-size: cover;
        background-position: center;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.7);"></div>
    <div class="blackapp-content">
        <div class="container-fluid px-5 px-lg-100">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 white">
                    <h1 class="blackapp-title"> {!! !empty($blockData->title1) ? $blockData->title1 : '' !!} <br> {!! !empty($blockData->title2) ? $blockData->title2 : '' !!}</h1>
                    <p class="blackapp-paragraph mr-0 mr-lg-5">
                        {!! !empty($blockData->paragraph) ? $blockData->paragraph : '' !!}</p>
                    <div class="link mb-3">
                        <a href="#" class="btn-link-lg"> {!! !empty($blockData->button_text) ? $blockData->button_text : '' !!}</a>
                    </div>
                    <div class="download mt-4">
                        <a href="#" class="mr-2 mb-3">  <img style="width: 120px; height: auto;" src="{{ imageUrl($blockData->image1, 1600, 750, ['crop' => false]) }}"></a>
                        <a href="#" class="mb-3"><img style="width: 120px; height: auto;" src="{{ imageUrl($blockData->image2, 1600, 750, ['crop' => false]) }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>