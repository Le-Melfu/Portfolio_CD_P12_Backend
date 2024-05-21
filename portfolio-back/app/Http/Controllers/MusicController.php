<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $music = [
            [
                'id' => 1,
                'title' => 'Au Jazz de Lune - Clément Degardenzi (composition court-métrage)',
                'audioSrc' => asset('storage/media/music/Au Jazz de Lune (court métrage).mp3'),
            ],
            [
                'id' => 2,
                'title' => 'Waves - Guthrie Govan (cover guitare)',
                'audioSrc' => asset('storage/media/music/Waves.mp3'),
            ],
            [
                'id' => 3,
                'title' => 'Locked out of heaven - Bruno Mars (cover basse)',
                'audioSrc' => asset('storage/media/music/locked out of heaven.mp3'),
            ],
            [
                'id' => 4,
                'title' => 'Summon the Megalodon - Sea of Thieves (cover MAO)',
                'audioSrc' => asset('storage/media/music/Summon the Megalodon.mp3'),
            ],
            [
                'id' => 5,
                'title' => 'Nemo - Nightwish (cover guitare)',
                'audioSrc' => asset('storage/media/music/nemo.mp3'),
            ],
            [
                'id' => 6,
                'title' => 'Silvera - Gojira (cover guitare)',
                'audioSrc' => asset('storage/media/music/gojira - silvera.mp3'),
            ],
        ];

        return response()->json($music);
    }
}