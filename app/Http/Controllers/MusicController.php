<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class MusicController extends Controller
{
    private $musics = [
            [
                "id" => 1,
                "title" => "Au Jazz de Lune - Clément Degardenzi (composition court-métrage)",
                "filename" => "Au_Jazz_de_Lune_(court_metrage).mp3"
            ],
            [
                "id" => 2,
                "title" => "Waves - Guthrie Govan (cover guitare)",
                "filename" => "Waves.mp3",
            ],
            [
                "id" => 3,
                "title" => "Locked out of heaven - Bruno Mars (cover basse)",
                "filename" => "locked_out_of_heaven.mp3",
            ],
            [
                "id" => 4,
                "title" => "Summon the Megalodon - Sea of Thieves (cover MAO)",
                "filename" => "Summon_the_Megalodon.mp3",
            ],
            [
                "id" => 5,
                "title" => "Nemo - Nightwish (cover guitare)",
                "filename" => "nemo.mp3",
            ],
            [
                "id" => 6,
                "title" => "Silvera - Gojira (cover guitare)",
                "filename" => "gojira_silvera.mp3",
            ],
        ];

    public function getAllMusic()
    {
        return response()->json($this->musics);
    }
    
    public function serveAudio($filename)
    {
        if(array_search($filename, array_column($this->musics, "filename"))!==false){
            $file = public_path("storage/media/music/" . $filename);
            if (!file_exists($file)) {
                abort(404, "File not found");
            }
            return new BinaryFileResponse($file);
        }
        abort(404, "File not found");
    }
}