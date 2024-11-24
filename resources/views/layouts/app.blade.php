<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>@yield('title')</title>

        <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <!-- Gritter -->
        <link href="{{ asset('theme/js/plugins/gritter/jquery.gritter.css') }} " rel="stylesheet">

        <link href="{{ asset('theme/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
        @yield('styles')
        <script>
            window.laravel = {!! json_encode([
                'csrfToken' => csrf_token()
            ]) !!};
        </script>
    </head>

    <body>
        <div id="wrapper">
            @include('layouts.partials.sidebar')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.partials.top-bar')

                <div class="wrapper wrapper-content animated fadeInRight">
                    @yield('content')
                </div>

                <div class="footer">
                    <div>
                        <strong>Copyright</strong> &copy; NUP 2025. All rights reserved
                    </div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{ asset('theme/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('theme/js/popper.min.js') }}"></script>
        <script src="{{ asset('theme/js/bootstrap.js') }}"></script>
        <script src="{{ asset('theme/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('theme/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{ asset('theme/js/inspinia.js') }}"></script>
        <script src="{{ asset('theme/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('theme/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- GITTER -->
        <script src="{{ asset('theme/js/plugins/gritter/jquery.gritter.min.js') }}"></script>
        @yield('javascript')
    </body>
</html>
