<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

    @yield('cdns')
</head>

<body>
    <div id='app'>
        @include('includes.header')
        <main>
            @yield('main-content')
        </main>
        @include('includes.footer')
    </div>
    @yield('script')
</body>

</html>
