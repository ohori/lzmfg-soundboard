@extends('layouts.app')

<div class="section">
    <form method="POST">

        @csrf

        <div class="columns is-multiline is-mobile">

            <div class="column is-full has-text-centered">
                <h1 class="title">Submit a Sound</h1>
                <h2 class="title is-6 has-text-grey">Have a sound byte from a YouTube video? Send it below!</h2>
                <hr />
                <p class="has-text-grey">If anyone from LZMFG want to send me sounds bites, please send me a message on twitter. My @ is in the footer.</p>
            </div>

            @if(@$success)
                <div class="column is-half is-offset-one-quarter">
                    <article class="message is-success">
                        <div class="message-header">
                            <p>Success!</p>
                        </div>
                        <div class="message-body">
                            <p>Thanks for helping out!</p>
                        </div>
                    </article>
                </div>
            @endif

            @if ($errors->any())
                <div class="column is-half is-offset-one-quarter">
                    <article class="message is-danger">
                        <div class="message-header">
                            <p>Oops!</p>
                        </div>
                        <div class="message-body">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            @endif

            <div class="column is-half-tablet is-offset-one-quarter-tablet is-10-mobile is-offset-1-mobile">
                <div class="field">
                    <label class="label">Crew Member</label>
                    <div class="control">
                        <input name="member" class="input" type="text" placeholder="E.g. Adam / Alberto">
                    </div>
                </div>
            </div>

            <div class="column is-one-third-tablet is-offset-one-quarter-tablet is-10-mobile is-offset-1-mobile">
                <div class="field">
                        <label class="label">YouTube URL</label>
                        <div class="control">
                            <input name="youtube_url" class="input" type="text" placeholder="https://www.youtube.com/watch?v=">
                        </div>
                </div>
            </div>

            <div class="column is-2-tablet is-10-mobile is-offset-1-mobile">
                <div class="field">
                    <label class="label">Time Stamp</label>
                    <div class="control">
                        <input name="time_stamp" class="input" type="time" placeholder="12:46">
                    </div>
                </div>
            </div>

            <div class="column has-text-centered is-half-tablet is-offset-one-quarter-tablet is-10-mobile is-offset-1-mobile">
                <textarea name="additional_comments" class="textarea" placeholder="Any additional comments..."></textarea>
            </div>

            <div class="column is-2-tablet is-offset-one-quarter-tablet is-10-mobile is-offset-1-mobile">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="social_media">
                                <option>Instagram</option>
                                <option>Twitter</option>
                                <option>Facebook</option>
                                <option>TikTok</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-4-tablet is-10-mobile is-offset-1-mobile">
                <div class="field">
                    <div class="control">
                        <input name="username" class="input" type="text" placeholder="@YourSocialHere">
                    </div>
                    <p class="help">Optional: This is to give you credit</p>
                </div>
            </div>

            <div class="column is-half-tablet is-offset-one-quarter-tablet is-10-mobile is-offset-1-mobile">
                <button type="submit" class="button is-fullwidth is-primary is-medium">Submit</button>
            </div>

        </div>
    </form>

    <div class="section has-text-centered remove-bottom-spacing">
        <a class="button" href="{{ Route('index') }}">Back to Soundboard</a>
    </div>

</div>
