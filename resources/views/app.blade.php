<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{--<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">--}}
        <link rel="stylesheet" href="{{ asset('/public/css/plugins/semantic.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/css/plugins/sweetalert.css') }}">

    </head>

    <body class="body">

        <div class="ui container" id="app-container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        {{--<script src="semantic/dist/semantic.min.js"></script>--}}
        <script src="{{ asset('/public/js/plugins/semantic.min.js') }}"></script>
        <script src="{{ asset('/public/js/app.js') }}"></script>
        <script src="{{ asset('/public/js/plugins/sweetalert.min.js') }}"></script>

        @include('partials.flash')

    </body>
</html>
