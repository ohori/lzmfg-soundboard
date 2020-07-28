<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Submission;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index()
    {
        $crew = [
            [
                'name' => 'AdamLZ',
                'avatar' => 'adam.jpg',
                'gender' => 'male',
                'sounds' => [
                    [
                        'id' => 'coffee',
                        'name' => 'Coffee',
                        'file' => 'adam/coffee.mp3'
                    ],
                    [
                        'id' => 'mhmm',
                        'name' => 'Mhmm',
                        'file' => 'adam/mhmm.mp3'
                    ],
                    [
                        'id' => 'lay_the_pipe',
                        'name' => 'Lay the pipe',
                        'file' => 'adam/lay_the_pipe.mp3'
                    ],
                ]
            ],
            [
                'name' => 'Collete',
                'avatar' => 'collete.png',
                'gender' => 'female',
                'sounds' => [
                    [
                        'id' => 'nooo',
                        'name' => 'Nooo',
                        'file' => 'collete/nooo.mp3'
                    ],
                    [
                        'id' => 'oh_my_gosh',
                        'name' => 'Oh my gosh',
                        'file' => 'collete/oh_my_gosh.mp3'
                    ],
                ]
            ],
            [
                'name' => 'Alberto',
                'avatar' => 'alberto.jpg',
                'gender' => 'male',
                'sounds' => [
                    [
                        'id' => 'teek',
                        'name' => 'Teek',
                        'file' => 'alberto/teek.mp3'
                    ],
                    [
                        'id' => 'nek_minnit',
                        'name' => 'Nek Minnit',
                        'file' => 'alberto/nek_minnit.mp3'
                    ]
                ]
            ],
            [
                'name' => 'Shulman',
                'avatar' => 'shulman.png',
                'gender' => 'male',
                'sounds' => [

                ]
            ],
            [
                'name' => 'Mike',
                'avatar' => 'mike.png',
                'gender' => 'male',
                'sounds' => [

                ]
            ],
        ];

        $crew = json_decode(json_encode($crew));

        return view('index')->with('crew', $crew);
    }

    function SubmitSoundPage()
    {
        return view('submit_a_sound');
    }

    function SubmitSound(Request $request)
    {
        $validatedData = $request->validate([
            'member' => ['required'],
            'youtube_url' => ['required'],
            'time_stamp' => ['required']
        ]);

        $submission = new Submission();

        $submission->member = $request->member;
        $submission->youtube_url = $request->youtube_url;
        $submission->time_stamp = $request->time_stamp;
        $submission->additional_comments = $request->additional_comments;
        $submission->social_media = $request->social_media;
        $submission->username = $request->username;

        $submission->save();

        return view('submit_a_sound')->with('success', true);
    }
}
