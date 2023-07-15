<?php

declare(strict_types=1);

/*
 * mine -André
 */

namespace App\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;

class Cadeaubon extends AbstractController{

    public function __invoke(): Response {
        return $this->render('Cadeaubon.html.twig', [
            'Cadeaubon' => [
                'price' => '10 - 50',
                'info' => 'Een basis gezichtsbehandeling dat de gezicht renig en ',
                'photo' => 'Photos/gezicht.png'
            ],
            'landline' => '0593 859 403',
            'mobile' => '06 8145 6398',
        ]);
    }
}