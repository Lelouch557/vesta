<?php

declare(strict_types=1);

/*
 * mine -André
 */

namespace App\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;

class Behandelingen extends AbstractController{

    public function __invoke(): Response {
        return $this->render('behandelingen.html.twig', [
            'Behandelingen' => [
                'Gezicht' => [
                    'Reinigende Gezichtsbehandeling' => [
                        'length' => '45 minuten',
                        'price' => '59,50',
                        'info' => 'Een basis gezichtsbehandeling dat de gezicht renig en ',
                        'photo' => 'Photos/gezicht.png',
                        'steps' => [
                            'Huidanalyse',
                            'Oppervlakte reiniging',
                            'Dieptereiniging eventueel i.c.m. vapozone of borstelapparaat',
                            'Onzuiverheden verwijderen',
                            'Masker',
                            'Nabehandeling en een verzorgde crème',
                        ]
                    ],
                    'Luxe Gezichtsbehandeling' => [
                        'length' => '45 minuten',
                        'price' => '59,50',
                        'info' => 'Een basis gezichtsbehandeling dat de gezicht renig en ',
                        'photo' => 'Photos/spa2.jpg',
                        'steps' => [
                            'Huidanalyse',
                            'Oppervlakte reiniging',
                            'Oppervlakte reiniging',
                            'Oppervlakte reiniging',
                            'Dieptereiniging eventueel i.c.m. vapozone of borstelapparaat',
                            'Onzuiverheden verwijderen',
                            'Masker',
                            'Nabehandeling en een verzorgde crème',
                        ]
                    ]
                ],
                'Lichaam' => [
                    'Reinigende Lichaambehandeling' => [
                        'length' => '45 minuten',
                        'price' => '55,50',
                        'info' => 'Een basis  dat de gezicht renig en ',
                        'photo' => 'Photos/gezicht.png',
                        'steps' => [
                            'Huidanalyse',
                            'Oppervlakte reiniging',
                            'Dieptereiniging eventueel i.c.m. vapozone of borstelapparaat',
                            'Onzuiverheden verwijderen',
                            'Masker',
                            'Nabehandeling en een verzorgde crème',
                        ]
                    ],
                    'Luxe Lichaambehandeling' => [
                        'length' => '45 minuten',
                        'price' => '99,50',
                        'info' => 'Een basidat de gezicht renig en ',
                        'photo' => 'Photos/spa2.png',
                        'steps' => [
                            'Huidanalyse',
                            'Oppervlakte reiniging',
                            'Oppervlakte reiniging',
                            'Oppervlakte reiniging',
                            'Dieptereiniging eventueel i.c.m. vapozone of borstelapparaat',
                            'Onzuiverheden verwijderen',
                            'Masker',
                            'Nabehandeling en een verzorgde crème',
                        ]
                    ]
                ]
            ],
            'landline' => '0593 859 403',
            'mobile' => '06 8145 6398',
        ]);
    }
}