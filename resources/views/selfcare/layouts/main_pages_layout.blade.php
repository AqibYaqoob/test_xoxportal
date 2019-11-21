@extends('selfcare.layouts.app')
@section('title')
    {!! isset($title) ? $title : 'Page' !!}
@endsection
@section('content')
    <div class="sc-header">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="{{ url('images/xox-activation.png') }}" />
            </a>
        </div>
    </div>
	@yield('main_content')
	<div class="sc-footer container">
        <div class="sitemap">
            <ul>
                <li>XOX</li>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Self Care</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="copy">&copy;Copyright</div>
    </div>
@endsection