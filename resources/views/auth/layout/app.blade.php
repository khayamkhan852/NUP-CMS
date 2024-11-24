<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <link href="{{ asset('theme/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
    </head>

    <body class="gray-bg">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                @yield('auth-content')
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{ asset('theme/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('theme/js/popper.min.js') }}"></script>
        <script src="{{ asset('theme/js/bootstrap.js') }}"></script>
    </body>
</html>
