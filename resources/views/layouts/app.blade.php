<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{ url('/images/favicon.png') }}"/>

        <title>LZMFG Soundboard</title>


        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>

        <section class="hero is-dark">
            <div class="hero-body has-text-centered">
                <p>Author</p>
                <a href="https://twitter.com/AlexSmudgee" target="_blank">
                    @AlexSmudgee
                </a>
            </div>
        </section>

        {{-- <div class="has-text-centered">
            <a href="https://twitter.com/AlexSmudgee" target="_blank">
                @AlexSmudgee
            </a>
        </div> --}}
    </body>
</html>
