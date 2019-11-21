@extends('vendor.voyager-frontend.layouts.default')
@section('css')
<style type="text/css">
.details h1, .details h2, .details h3, .details h4, .details h5, .details h6, .details p{
	color: #000000;
}
</style>
@endsection
@section('content')
<div class="xp-section py-50 bg-white">
    <div class="container">
        <div class="text-center pt-5">
            <h2 class="xp-title mb-4">Need help with our mobile operator products and services?</h2>
            <h6 class="mb-4">Get instant answers to your questions!</h6>
            <div style="overflow: hidden;">
                <select class="xp-select xp-select-lg w-max-sm-100 categories" name="category">
                	<option value="">-- Select Category --</option>
                	@foreach($categories as $key => $value)
                		<option value="{!! $value['category_slug'] !!}" {{ $value['category_slug'] == $details['category_slug'] ? 'selected="selected"' : '' }}>{!! $value['category_name'] !!}</option>
                	@endforeach                          
                </select>
            </div>
        </div>
    </div>
</div>
@if($details)
<div class="xp-section py-5 bg-white">
    <div class="container">
        <h3>FAQ Categories</h3>
        <div id="accordion">
        	@foreach($details['faq_details'] as $key => $value)
        		<div class="card faq-card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#card_{{$value['id']}}">
                            {!! $value['question'] !!}
                        </a>
                    </div>
                    <div id="card_{{$value['id']}}" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            {!!  $value['answer'] !!}
                        </div>
                    </div>
                </div>
        	@endforeach
        </div>
    </div>
</div>
@endif
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		// 1) Category Dropdown event change
		$(document).on('change', '.categories', function(){
			window.location.href = "{{ url('/faq/details/') }}/" + $(this).val();
		})
	})
</script>
@endsection