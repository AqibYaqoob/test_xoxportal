<div class="banner-item" style="background-image: url('{!! !empty($blockData->background_image) ? imageUrl($blockData->background_image, 1600, 750, ['crop' => false]) : '' !!}')">
    <div class="banner-content text-center d-flex flex-column flex-1">
        <div class="container px-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left white">
                    <div class="div-h20 div-md-h100 div-lg-h10"></div>
                    <h1 class="banner-title"> {!! $blockData->title1 !!} </h1>
                    <p class="banner-paragraph mb-4"> {!! $blockData->text !!}</p>
                </div>
                <div class="col-lg-6">
                    <div class="flex-even mb-5 p-md-4 text-left">
                        <form class="p-4 p-md-5" action="{{ url('site/enquiry/send') }}" method="POST" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16);background-color: {!! !empty($blockData->form_background_color) ? $blockData->form_background_color : '#000000' !!};">
                            {!! csrf_field() !!}
                            <h3 class="bold">Contact Us</h3>
                            <div class="div-h40"></div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Category">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" type="text" placeholder="Enquiry"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-form w-100 w-md-auto" style="background-color: #2F6BC4;" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
