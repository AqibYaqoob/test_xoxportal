
<!doctype html>
<html lang="en">
  <head>
    <!-- <meta charset="utf-8"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', setting('site.description')) - {{ setting('site.title') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('meta_keywords', setting('site.keywords'))">

	<!-- Open Graph -->
	<meta property="og:site_name" content="{{ setting('site.title') }}" />
	<meta property="og:title" content="@yield('meta_title')" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:image" content="@yield('meta_image', url('images/xox-icon.png'))" />
	<meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

	<!-- Icons -->
	<meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
	<meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="icon" href="{{ url('images/xox-icon.png') }}">

    <title>@yield('meta_title', setting('site.title'))</title>

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600|Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/"> -->
    <link href="{{ url('css/all.min.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <!-- <link href="{{ url('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/xp-style.css') }}" rel="stylesheet">

    <!-- Style.css -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/swiper.min.css') }}" rel="stylesheet">
    @if (setting('site.google_analytics_tracking_id'))
		<!-- Google Analytics (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
		<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
		</script>
	@endif
	@if (setting('admin.google_recaptcha_site_key'))
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script>
            function setFormId(formId) {
                window.formId = formId;
            }

            function onSubmit(token) {
                document.getElementById(window.formId).submit();
            }
        </script>
    @endif
    @if(setting('site.facebook_pixel')) 
        {!! setting('site.facebook_pixel') !!}
    @endif
    @yield('css') 
  </head>

<body class="{{ setting('site.templates') }}">
    <div id="main">