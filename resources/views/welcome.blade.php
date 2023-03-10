<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- ASSETS --}}
        @vite('resources/js/app.js')

        <title>Laravel Model Controller</title>
    </head>
    <body>
        <main>
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        {{ $movie['title'] }}
                    </li>
                @endforeach
            </ul>
        </main>
    </body>
</html>
