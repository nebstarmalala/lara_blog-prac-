<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="antialiased">
        @yield('content')
        <footer class="ml-4 text-center text-sm text-gray-700 sm:text-center sm:ml-0">
            copyright 2020 Nebstar Malash
        </footer>
    </body>
</html>