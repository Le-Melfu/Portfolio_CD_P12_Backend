<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Riding Cities',
                'desc' => ['Ce projet était une initiation aux bases du HTML et du CSS'],
                'image' => asset('storage/media/img/riding-cities.webp'),
                'imageAlt' => 'Visuel du site',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 2,
                'title' => 'Booki',
                'desc' => [
                    'Ce projet consistait en l\'élaboration de la page d\'accueil d\'une agence de location immobilère en utilisant HTML et CSS avec les grid et les flexbox',
                ],
                'url' => 'https://github.com/Le-Melfu/booki-starter-code',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 3,
                'title' => 'Oh My Food',
                'desc' => [
                    'Ce projet consistait en l\'élaboration d\'animations simple afin de dynamiser la page d\'une application de restauration',
                ],
                'url' => 'https://github.com/Le-Melfu/Site_OhMyFood',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 4,
                'title' => 'Print It',
                'desc' => [
                    'Ce projet m\'a permis d\'appréhender les bases de JAVASCRIPT dans la réalisation d\'un carousel dynamique',
                ],
                'url' => 'https://github.com/Le-Melfu/Print-it-JS',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 5,
                'title' => 'Architecte Sophie Bluel',
                'desc' => [
                    'Dans ce projet j\'ai pu apprendre le fonctionnement des API et comment s\'en servir au sein d\'une application classique HTML/CSS/JS grâce aux différentes requêtes',
                ],
                'url' => 'https://github.com/Le-Melfu/Portfolio-architecte-sophie-bluel',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 6,
                'title' => 'Kasa',
                'desc' => [
                    'Ce projet m\'a permis d\'apprendre les bases de fonctionnement de React pour créer une Single Page Application',
                ],
                'url' => 'https://github.com/Le-Melfu/Kasa',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 7,
                'title' => 'Nina Carducci',
                'desc' => [
                    'Dans ce projet j\'ai du optimiser le site internet d\'une photographe afin que celui-ci gagne en performance, en accessibilité et en SEO.',
                ],
                'url' => 'https://github.com/Le-Melfu/ninacarducci.github.io',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
            [
                'id' => 8,
                'title' => '724 events',
                'desc' => [
                    'Dans ce projet j\'ai eu à trouver et régler plusieurs bug sur un site d\'une agence d\'événementiel, que ce soit des bugs fonctionnel mais également des bugs d\'intégration',
                    'J\'ai également dù écrire plusieurs tests unitaire et aborder cet aspect du travail de développeur WEB',
                ],
                'url' => 'https://github.com/Le-Melfu/Debuggez-une-application-React.JS',
                'pin' => 'path/to/Logo_OpenClassrooms.png',
                'pinAlt' => 'Logo OpenClassRooms',
            ],
        ];

        return response()->json($projects);
    }
}