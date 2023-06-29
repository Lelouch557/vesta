<?php

declare(strict_types=1);

/*
 * mine -André
 */

namespace App\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;

class Home extends AbstractController{

    public function __invoke(): Response {
        $photos = [
            0 => '/Photos/spa0.jpg',
            1 => '/Photos/spa1.jpg',
            2 => '/Photos/spa2.jpg',
            3 => '/Photos/spa3.jpg',
            4 => '/Photos/spa4.jpg',
            5 => '/Photos/spa5.jpg',
            6 => '/Photos/spa6.jpg',
            7 => '/Photos/spa7.jpg',
            8 => '/Photos/spa8.jpg',
            9 => '/Photos/spa9.jpg',
            10 => '/Photos/spa10.jpg',
            11 => '/Photos/spa11.jpg',
            12 => '/Photos/spa12.jpg',
        ];
        return $this->render('home.html.twig', [
            'photos' => $photos,
            'intro' => 'Welkom bij salon Vesta',
            'landline' => '0593 859 403',
            'mobile' => '06 8145 6398',
        ]);
    }
}