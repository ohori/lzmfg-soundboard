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

<div class="section">
    <div class="columns is-multiline is-mobile">
        @foreach($crew as $member)
            <div class="column is-half-tablet is-full-mobile has-text-centered">

                <p class="subtitle is-1 {{ $member->gender == "male" ? "male" : "female" }}">
                    {{ $member->name }}
                </p>

                <img width="250" src="{{ url('images/crew/' . $member->avatar . '') }}" />

                @if($member->sounds)
                    <div class="buttons has-addons is-centered">
                        @foreach($member->sounds as $sound)
                            <br />
                            <audio id="{{ $sound->id }}">
                                <source src="{{ url('sounds/crew/'. $sound->file . '') }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                            <button class="button is-primary is-outlined" onclick="PlaySound('{{ $sound->id }}')" type="button">{{ $sound->name }}</button>
                        @endforeach
                    </div>
                @else
                    <p class="subtitle has-text-grey">Coming soon...</p>
                @endif

            </div>
        @endforeach
    </div>
</div>

<hr />

<section class="hero">
    <div class="hero-body has-text-centered">
        <p class="title">Have a sound request?</p>
        <a class="subtitle has-text-info">Submit it here</a>
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
