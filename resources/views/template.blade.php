<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap_4_6_1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap_4_6_1/css/bootstrap.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('main')
        </div>
        <script src="{{ asset('js/jquery_3_6_0.min.js') }}"></script>
        <script src="{{ asset('bootstrap_4_6_1/js/bootstrap.min.js') }}"></script>
    </body>
</html>