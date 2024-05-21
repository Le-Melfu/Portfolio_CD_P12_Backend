<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    public function run()
    {
        Music::create([
            'title' => 'Au Jazz de Lune - Clément Degardenzi (composition court-métrage)',
            'audio_src' => 'path/to/Au Jazz de Lune (court métrage).mp3',
        ]);

        Music::create([
            'title' => 'Waves - Guthrie Govan (cover guitare)',
            'audio_src' => 'path/to/Waves.mp3',
        ]);

        Music::create([
            'title' => 'Locked out of heaven - Bruno Mars (cover basse)',
            'audio_src' => 'path/to/locked out of heaven.mp3',
        ]);

        Music::create([
            'title' => 'Summon the Megalodon - Sea of Thieves (cover MAO)',
            'audio_src' => 'path/to/Summon the Megalodon.mp3',
        ]);

        Music::create([
            'title' => 'Nemo - Nightwish (cover guitare)',
            'audio_src' => 'path/to/nemo.mp3',
        ]);

        Music::create([
            'title' => 'Silvera - Gojira (cover guitare)',
            'audio_src' => 'path/to/gojira - silvera.mp3',
        ]);
    }
}
