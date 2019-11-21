@extends('web.layouts.app')

<!-- Main jumbotron for a primary marketing message or call to action -->
@section('content')

<div id="main">
	{!! \Blade::compileString($page->body) !!}
</div>

@endsection