<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAllProjects()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Riding Cities',
                'desc' => ['Ce projet était une initiation aux bases du HTML et du CSS'],
                'image' => asset('storage/media/img/riding-cities.webp'),
                'imageAlt' => 'Visuel du site',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                ]
            ],
            [
                'id' => 2,
                'title' => 'Booki',
                'desc' => [
                    'Ce projet consistait en l\'élaboration de la page d\'accueil d\'une agence de location immobilère en utilisant HTML et CSS avec les grid et les flexbox',
                ],
                'url' => 'https://github.com/Le-Melfu/booki-starter-code',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                ]
            ],
            [
                'id' => 3,
                'title' => 'Oh My Food',
                'desc' => [
                    'Ce projet consistait en l\'élaboration d\'animations simple afin de dynamiser la page d\'une application de restauration',
                ],
                'url' => 'https://github.com/Le-Melfu/Site_OhMyFood',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                ]
            ],
            [
                'id' => 4,
                'title' => 'Print It',
                'desc' => [
                    'Ce projet m\'a permis d\'appréhender les bases de JAVASCRIPT dans la réalisation d\'un carousel dynamique',
                ],
                'url' => 'https://github.com/Le-Melfu/Print-it-JS',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                    [
                        'img' => asset('storage/media/img/JS.png'),
                        'alt' => 'Javascript'
                    ],
                ]
            ],
            [
                'id' => 5,
                'title' => 'Architecte Sophie Bluel',
                'desc' => [
                    'Dans ce projet j\'ai pu apprendre le fonctionnement des API et comment s\'en servir au sein d\'une application classique HTML/CSS/JS grâce aux différentes requêtes',
                ],
                'url' => 'https://github.com/Le-Melfu/Portfolio-architecte-sophie-bluel',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                    [
                        'img' => asset('storage/media/img/JS.png'),
                        'alt' => 'Javascript'
                    ],
                ]
            ],
            [
                'id' => 6,
                'title' => 'Kasa',
                'desc' => [
                    'Ce projet m\'a permis d\'apprendre les bases de fonctionnement de React pour créer une Single Page Application',
                ],
                'url' => 'https://github.com/Le-Melfu/Kasa',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/REACT.png'),
                        'alt' => 'ReactJS'
                    ],
                ]
            ],
            [
                'id' => 7,
                'title' => 'Nina Carducci',
                'desc' => [
                    'Dans ce projet j\'ai du optimiser le site internet d\'une photographe afin que celui-ci gagne en performance, en accessibilité et en SEO.',
                ],
                'url' => 'https://github.com/Le-Melfu/ninacarducci.github.io',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/HTML.png'),
                        'alt' => 'HTML'
                    ],
                    [
                        'img' => asset('storage/media/img/CSS.png'),
                        'alt' => 'CSS'
                    ],
                    [
                        'img' => asset('storage/media/img/JS.png'),
                        'alt' => 'Javascript'
                    ],
                ]
            ],
            [
                'id' => 8,
                'title' => '724 events',
                'desc' => [
                    'Dans ce projet j\'ai eu à trouver et régler plusieurs bug sur un site d\'une agence d\'événementiel, que ce soit des bugs fonctionnel mais également des bugs d\'intégration',
                    'J\'ai également dù écrire plusieurs tests unitaire et aborder cet aspect du travail de développeur WEB',
                ],
                'url' => 'https://github.com/Le-Melfu/Debuggez-une-application-React.JS',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/REACT.png'),
                        'alt' => 'ReactJS'
                    ],
                ]

            ],
            [
                'id' => 9,
                'title' => 'Argent Bank',
                'desc' => [
                    'Dans ce projet j\'ai pu réaliser l\'intégration d\'un state global grâce à l\'utilisation de Redux couplée à React',
                    'J\'ai également dù écrire le fichier YAML permettant de définir les Endpoints dont j\'aurais besoin afin de continuer le projet',
                ],
                'url' => 'https://github.com/Le-Melfu/argentBank-appFront',
                'urlText' => 'Voir le code sur Github',
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/REACT.png'),
                        'alt' => 'ReactJS'
                    ],
                    [
                        'img' => asset('storage/media/img/REDUX.png'),
                        'alt' => 'Redux Toolkit'
                    ],
                ]
            ],
            [
                'id' => 10,
                'title' => 'Portfolio',
                'desc' => [
                    'Dans ce projet j\'ai pu réaliser l\'ensemble du site sur lequel vous naviguez actuellement.',
                    'Cela m\'a permis de développer ce projet en toute autonomie et de choisir les technologies adaptées à mes besoins.',
                    'React était tout indiqué dans le côté FrontEnd mais étant musicien il m\'a fallu trouver une solution pour les fichiers audio de la page musique.',
                    'J\'ai donc décidé d\'utiliser Laravel afin de créer une petite API qui me permettrait de servir l\'audio dynamiquement. Celle ci me permet également de servir dynamiquement la liste de mes projets.'
                ],
                'pin' => asset('storage/media/img/Logo_OpenClassrooms.png'),
                'pinAlt' => 'Logo OpenClassRooms',
                'tech' => [
                    [
                        'img' => asset('storage/media/img/REACT.png'),
                        'alt' => 'ReactJS'
                    ],
                    [
                        'img' => asset('storage/media/img/LARAVEL.png'),
                        'alt' => 'Laravel'
                    ],
                ]
            ],
        ];

        return response()->json($projects);
    }
}
