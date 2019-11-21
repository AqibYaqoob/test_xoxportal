<div class="xp-section" style="padding-top: 0px">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.864266754757!2d101.59488549999999!3d3.1305558999999956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc495dce7ee263%3A0x44a890304364e093!2sXOX+Com+Sdn+Bhd!5e0!3m2!1sen!2smy!4v1442797675186"
            width="100%" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
    </div>
</div>

<!-- Contact Details with Type -->
@php
    $contactDetails = App\ContactType::with('contact_details')->get()->toArray();
@endphp
<div class="section text-center bg-white">
    <div class="div-h100"></div>
    <div class="container">
        <div class="div-h100"></div>
        <div class="d-flex justify-content-center">
            <div class="div-h80"></div>
            <ul class="nav nav-pills tab-menu">
                @foreach($contactDetails as $key => $value)
                    <li class="nav-item">
                        <a class="nav-link {!! ($key == 0) ? 'active' : '' !!}" data-toggle="pill" href="#address{{$value['id']}}">{{$value['type']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-content white">
            @foreach($contactDetails as $key => $value)
                <div class="tab-pane container {!! ($key == 0) ? 'active' : '' !!}" id="address{{$value['id']}}">
                    <h2 class="bold">
                        <div class="div-h40"></div>
                        <a style="color: black" class="nav-link {!! ($key == 0) ? 'active' : '' !!}" data-toggle="pill" href="#address{{$value['id']}}">{{$value['type']}}</a></h2>
                    <div class="div-h40"></div>
                    <div class="row locations">
                        @foreach($value['contact_details'] as $detailKey => $detailValue)
                            <div class="col-md-4 p-2 mb-5">
                                {!! $detailValue['contact_details']!!}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="div-h100"></div>
    </div>
</div>
