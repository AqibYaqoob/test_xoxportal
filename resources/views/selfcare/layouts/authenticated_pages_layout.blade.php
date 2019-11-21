@extends('selfcare.layouts.app')
@section('title')
	{!! isset($title) ? $title : 'Page' !!}
@endsection
@section('content')
	<div class="wrapper">
		@include('selfcare.menu.side_bar')
		<div id="content">
			@yield('main_content')
		</div>	
	</div>
@endsection