<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'id' => 1,
                'image' => 'path/to/slide1.webp',
                'imageTablet' => 'path/to/slide1Tablet.webp',
                'imageMobile' => 'path/to/slide1Mobile.webp',
                'alt' => 'Clément Degardenzi jouant de la guitare',
            ],
            [
                'id' => 2,
                'image' => 'path/to/slide2.webp',
                'imageTablet' => 'path/to/slide2Tablet.webp',
                'imageMobile' => 'path/to/slide2Mobile.webp',
                'alt' => 'Scène de concert',
            ],
            [
                'id' => 3,
                'image' => 'path/to/slide3.webp',
                'imageTablet' => 'path/to/slide3Tablet.webp',
                'imageMobile' => 'path/to/slide3Mobile.webp',
                'alt' => 'Ordinateur affichant un logiciel de MAO',
            ],
        ];

        return response()->json($slides);
    }
}
