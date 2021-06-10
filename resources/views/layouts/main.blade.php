<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('head-title', 'PACKAGES TRAVEL')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        {{-- CSS Style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        @include('partials.header')


        <main>
        @yield('content')
        
        </main>


        @include('partials.footer')

    </body>
</html>