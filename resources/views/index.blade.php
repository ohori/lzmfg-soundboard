@extends('layouts.app')

<section class="hero is-fullheight is-dark">
    <div class="hero-body">
        <div class="container has-text-centered">

            <img src="{{ url('/images/logo.png') }}" width="500" />

            <p class="title-font">
                <span class="green">SOUND</span><span class="pink">BOARD</span>
            </p>

            <p class="subtitle is-1 animated bounce">⌄</p>

        </div>
    </div>
</section>

<section class="hero is-light">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title is-1 has-text-white pink">Context</p>
            <br />
            <div class="columns is-centered">
                <div class="column is-half-desktop is-full-tablet">
                    <figure class="image is-16by9">
                        <iframe class="has-ratio" width="640" height="360" src="https://www.youtube.com/embed/npVWgth9n6g?start=1040&controls=0&end=1079&showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>
            <br />
            <p class="subtitle">Challenge accepted...</p>
        </div>
    </div>
</section>

<div class="columns is-multiline is-mobile">
    @foreach($crew as $member)
        <div class="column is-full">
            @if($loop->iteration === 1)
                <hr class="hide-top-hr" />
            @endif
            <div class="columns is-vcentered">
                <div class="column is-one-quarter has-text-centered">
                    <p class="subtitle is-1 is-paddingless is-marginless {{ $member->gender == "male" ? "male" : "female" }}">
                        {{ $member->name }}
                    </p>
                    <img width="250" src="{{ url('images/crew/' . $member->avatar . '') }}"/>
                </div>
                <div class="column">
                    <div class="columns is-multiline is-mobile">
                        @if($member->sounds)
                            @foreach($member->sounds as $sound)
                                <div class="column is-one-third-desktop is-half-tablet has-text-centered">
                                    <div class="section remove-top-bottom-spacing">
                                        <br />
                                        <audio id="{{ $sound->id }}">
                                            <source src="{{ url('sounds/crew/'. $sound->file . '') }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>

                                        <p class="subtitle has-text-grey">{{ $sound->name }}</p>

                                        <button class="button is-large is-fullwidth is-primary is-outlined" onclick="PlaySound('{{ $sound->id }}')" type="button">
                                            <i class="fa fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="column is-one-third-desktop is-half-tablet has-text-centered">
                                <div class="has-text-centered">
                                    <p class="subtitle has-text-grey">Coming soon...</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        <hr class="remove-bottom-spacing" />

    </div>
    @endforeach
</div>

<section class="hero">
    <div class="hero-body has-text-centered">
        <p class="title">Have a sound request?</p>
        <a class="subtitle has-text-info" href="{{ Route('submit-a-sound') }}">Submit a sound here</a>
    </div>
</section>

<script>
    function PlaySound(audio_id) {
        var audio = document.getElementById(audio_id);

        if ( audio.paused ) {
            audio.play();
        } else {
            audio.currentTime = 0
        }
    }
</script>
