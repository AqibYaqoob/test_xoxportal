@extends('vendor.voyager-frontend.layouts.default')
@section('css')
@endsection
@section('content')
<div class="xp-section py-50 bg-white">
    <div class="container">
        <div class="text-center pt-5">
            <h2 class="xp-title mb-4">Terms & Conditions for the usage of XOX MOBILE operator services and products</h2>
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
    <div class="container tnc-detail">
    	{!! $details['detail'] !!}
    </div>
</div>    	
@endif
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		// 1) Category Dropdown event change
		$(document).on('change', '.categories', function(){
			window.location.href = "{{ url('/tandc/details/') }}/" + $(this).val();
		})
	})
</script>
@endsection