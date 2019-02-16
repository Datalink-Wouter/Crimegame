<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Crimegame') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        @include('layouts.partials.header')

        <div class="row">
            <div class="col-md-3 menu_wrapper">
                @include('layouts.partials.menu')
            </div>
            <div class="col-md-6 game_wrapper">
                @include('alert::bootstrap')
                @yield('content')
            </div>
            <div class="col-md-3 menu_wrapper">
                @include('layouts.partials.menu')
            </div>
        </div>

        <footer>
            Footer
        </footer>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
