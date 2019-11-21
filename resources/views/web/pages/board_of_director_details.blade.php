@extends('vendor.voyager-frontend.layouts.default')
@section('css')
<style type="text/css">
.details h1, .details h2, .details h3, .details h4, .details h5, .details h6, .details p{
	color: #000000;
}
</style>
@endsection
@section('content')
<div class="xp-section bg-white">
    <div class="div-h100"></div>
    <div class="text-center pb-3">
        <h1 class="xp-title-xl">BOARD OF DIRECTORS</h1>
        <p>The team that made us the fastest growing mobile network in Malaysia</p>
    </div>
</div>
@if($details)
	<div class="xp-section py-sm-100 bg-black cyan">
        <div class="text-center py-100">
            <h1><i>{{ $details['name'] }}</i></h1>
            <h1><i>{{ $details['position'] }}</i></h1>
        </div>
    </div>
    <div class="xp-section bg-white py-100">
            <div class="container">
                {!! $details['detail_description'] !!}
                <div class="div-h100"></div>
                <div class="d-flex justify-content-between">
                    @if($previous)
                        <a href="{{ url('board-of-director/detail/'.$previous->category_slug) }}" class="red">< Back</a>
                    @endif
                    @if($next)
                        <a href="{{ url('board-of-director/detail/'.$next->category_slug) }}" class="red">> Next</a>
                    @endif
                </div>
            </div>
        </div>
@endif
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){})
</script>
@endsection