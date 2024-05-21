<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function index()
    {
        $music = [
            [
                'id' => 1,
                'title' => 'Au Jazz de Lune - Clément Degardenzi (composition court-métrage)',
                'audioSrc' => Storage::url('media/music/Au_Jazz_de_Lune_(court_metrage).mp3')
            ],
            [
                'id' => 2,
                'title' => 'Waves - Guthrie Govan (cover guitare)',
                'audioSrc' => Storage::url('media/music/Waves.mp3'),
            ],
            [
                'id' => 3,
                'title' => 'Locked out of heaven - Bruno Mars (cover basse)',
                'audioSrc' => Storage::url('media/music/locked_out_of_heaven.mp3'),
            ],
            [
                'id' => 4,
                'title' => 'Summon the Megalodon - Sea of Thieves (cover MAO)',
                'audioSrc' => Storage::url('media/music/Summon_the_Megalodon.mp3'),
            ],
            [
                'id' => 5,
                'title' => 'Nemo - Nightwish (cover guitare)',
                'audioSrc' => Storage::url('media/music/nemo.mp3'),
            ],
            [
                'id' => 6,
                'title' => 'Silvera - Gojira (cover guitare)',
                'audioSrc' => Storage::url('media/music/gojira_silvera.mp3'),
            ],
        ];

        return response()->json($music);
    }
}