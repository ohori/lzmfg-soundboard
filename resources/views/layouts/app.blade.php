<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{ url('/images/favicon.png') }}"/>

        <title>LZMFG Soundboard</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

        <meta name="title" content="LZMFG Soundboard">
        <meta name="description" content="A bespoke soundboard with all your favourite LZMFG sound bites.">

        {{-- Facebook Meta Tags --}}
        <meta property="og:title" content="LZMFG Soundboard" />
        <meta property="og:description" content="A bespoke soundboard with all your favourite LZMFG sound bites." />
        <meta property="og:image" content="{{ url('/images/favicon.png') }}" />
        <meta property="og:type" content="website" />

        <meta name="robots" content="index, follow" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97464582-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-97464582-3');
        </script>
    </head>
    <body>

        @yield('content')

        <section class="hero is-light">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <p>This is a bespoke, fan made project that is still work in progress.</p>
                    <p>All sounds extracted from <a href="https://www.youtube.com/user/LZBMX" target="_blank">AdamLZ</a> YouTube channel.</p>
                    <br />
                    <p>Check out the code on <a href="https://github.com/ohori/lzmfg-soundboard" target="_blank">GitHub</a></p>
                    <p class="subtitle">
                        <a class="has-text-info" href="https://twitter.com/AlexSmudgee" target="_blank">
                            @AlexSmudgee
                        </a>
                    </p>
                </div>
            </div>
        </section>

    </body>
</html>
