<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="icon" href="{{ url('images/favicon/favicon-32x32.png') }}" sizes="32x32">
        <link rel="apple-touch-icon-precomposed" href="{{ url('images/favicon/favicon-32x32.png') }}">
        <!-- META DATA-->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="title" content="Forge Admin is modern, responsive Material Admin Template.">
        <meta name="description" content="">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, materialcss, admin pages, material CMS, resoponsive material admin">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="{{ url('images/favicon/favicon-32x32.png') }}">
        <meta name="theme-color" content="#2a56c6">



        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'VentCon') }}</title>
        <!-- FONTS-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Inconsolata" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/admin/materialiconsfonts.css') }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/dynamic.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/scrollbar/perfect-scrollbar.min.css') }}">
        <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/materialdesignicons.min.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @yield('appPre')
        <div id="app">
            <div id="preloader">
              <div class="preloader-center">
                <div class="dots-loader dot-circle"></div>
              </div>
            </div>
            <header>
                @include('admin.includes.header')
            </header>
            <!-- <main> -->
                @yield('content')
                @include('admin.includes.footer')
            <!-- </main> -->
        </div>
        @yield('appPost')
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>

        @yield('jsPreApp')
        {{-- APP AND INIT --}}
        <script src="{{ asset('js/forgeapp.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
        @yield('jsPostApp')
    </body>
</html>