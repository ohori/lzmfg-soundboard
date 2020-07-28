<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
}
