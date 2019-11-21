
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <title>@yield('title') - XOX Self Care</title>
        <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/"> -->
        <!-- Bootstrap core CSS -->
        <!-- <link href="{{ url('css/app.css') }}" rel="stylesheet"> -->
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ url('css/selfcare.css') }}" rel="stylesheet">
    </head>
    <body class="sc-bg2">
        @yield('content')
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--         <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
        <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
        <script src="{{ url('js/app.js')}}"></script>
    </body>
</html>
