<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Graduate Follow-Up') }}</title>

    <!-- Styles -->
    @yield('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex-with-footer">
    <header id="header">
        <div class="header__title">Graduate Follow-up Tracker</div>
        @yield('userinfo')
    </header>
    @yield('titlebar')
    <section id="content">
        @yield('content')
    </section>
    <section id="footer" class="z-depth-2">
        <div class="container">
            <p class="center-align mt30 mb30">&copy; 2018 | graduate.elliottprogrammer.com | Grad Follow-Up App | Ver 0.1.1</p>
        </div>
    </section>
    @yield('modals')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('materialize_scripts')
    @yield('scripts')
</body>
</html>
