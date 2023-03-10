<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- ASSETS --}}
        @vite('resources/js/app.js')

        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Laravel Model Controller</title>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="card-box">
                    @foreach ($movies as $movie)
                        <div class="card">
                            {{-- IMG BOX --}}
                            <div class="img-box">
                                <img src="{{ Vite::asset('resources/img/').'/'.$movie['id'].'.jpg' }}" alt="{{ $movie['title'] }}">
                            </div>
                            {{-- INFO-BOX --}}
                            <div class="info-box">
                                <h5 class="title" title="{{ $movie['title'] }}">
                                    {{ $movie['title'] }}
                                </h5>
                                <div class="origin">
                                    <p>{{ $movie['original_title'] }}</p>
                                    @if ($movie['nationality'] == 'american/british')
                                        <img src="{{ Vite::asset('resources/img/eng.png') }}" alt="{{ $movie['nationality'] }}">
                                    @else
                                        <img src="{{ Vite::asset('resources/img/us.png') }}" alt="{{ $movie['nationality'] }}">
                                    @endif
                                </div>
                                <p>
                                    <span> Anno: </span>
                                    {{ date('Y', strtotime($movie['date'])) }}
                                </p>
                                <div class="vote">
                                    <i class="fa-solid fa-heart"></i>
                                    <h4>{{ $movie['vote'] }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </body>
</html>
