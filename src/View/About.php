<?php

declare(strict_types=1);

/*
 * mine -André
 */

namespace App\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;

class About extends AbstractController{

    public function __invoke(): Response {
        return $this->render('about.html.twig', [
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'intro' => 'Welkom bij salon Vesta',
            'landline' => '0593 859 403',
            'mobile' => '06 8145 6398',
        ]);
    }
}