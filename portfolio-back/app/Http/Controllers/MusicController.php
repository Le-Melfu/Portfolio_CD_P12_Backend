<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class MusicController extends Controller
{
    public function index()
    {
        $music = [
            [
                'id' => 1,
                'title' => 'Au Jazz de Lune - Clément Degardenzi (composition court-métrage)',
                'audioSrc' => url('api/audio/Au_Jazz_de_Lune_(court_metrage).mp3')
            ],
            [
                'id' => 2,
                'title' => 'Waves - Guthrie Govan (cover guitare)',
                'audioSrc' => url('api/audio/Waves.mp3'),
            ],
            [
                'id' => 3,
                'title' => 'Locked out of heaven - Bruno Mars (cover basse)',
                'audioSrc' => url('api/audio/locked_out_of_heaven.mp3'),
            ],
            [
                'id' => 4,
                'title' => 'Summon the Megalodon - Sea of Thieves (cover MAO)',
                'audioSrc' => url('api/audio/Summon_the_Megalodon.mp3'),
            ],
            [
                'id' => 5,
                'title' => 'Nemo - Nightwish (cover guitare)',
                'audioSrc' => url('api/audio/nemo.mp3'),
            ],
            [
                'id' => 6,
                'title' => 'Silvera - Gojira (cover guitare)',
                'audioSrc' => url('api/audio/gojira_silvera.mp3'),
            ],
        ];

        return response()->json($music);
    }
    
    public function serveAudio($filename)
    {
        $file = public_path('storage/media/music/' . $filename);

        if (!file_exists($file)) {
            abort(404, 'File not found');
        }

        return new BinaryFileResponse($file);
    }
}