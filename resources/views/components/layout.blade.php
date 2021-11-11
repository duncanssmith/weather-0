<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- @auth -->
            @include('layouts.navigation')
            <!-- @endauth -->

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header ?? '' }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $slot }}
                </div>
            </main>
        </div>

        <!-- Load React. -->
        <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

        <!-- Load React component. -->
        <!-- <div id="example"></div> -->
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->
        <!-- <script src="like_button.js"></script> -->
        <!-- <script src="weather.js"></script> -->
        <!-- <script src="{{ asset('js/weather.js') }}" defer></script> -->
        <!-- <script src="{{ asset('js/weather_0.js') }}" defer></script> -->
        <!-- <script src="{{ asset('js/weather_1.js') }}" defer></script> -->

    </body>
</html>
