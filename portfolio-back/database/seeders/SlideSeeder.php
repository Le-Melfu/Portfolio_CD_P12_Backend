<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    public function run()
    {
        Slide::create([
            'image' => 'path/to/Slideshow-01.webp',
            'image_tablet' => 'path/to/Slideshow-01-tablet.webp',
            'image_mobile' => 'path/to/Slideshow-01-mobile.webp',
            'alt' => 'Clément Degardenzi jouant de la guitare',
        ]);

        Slide::create([
            'image' => 'path/to/Slideshow-02.webp',
            'image_tablet' => 'path/to/Slideshow-02-tablet.webp',
            'image_mobile' => 'path/to/Slideshow-02-mobile.webp',
            'alt' => 'Scène de concert',
        ]);

        Slide::create([
            'image' => 'path/to/MAO-01.webp',
            'image_tablet' => 'path/to/MAO-01-tablet.webp',
            'image_mobile' => 'path/to/MAO-01-mobile.webp',
            'alt' => 'Ordinateur affichant un logiciel de MAO',
        ]);
    }
}
