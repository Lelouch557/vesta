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
                'info' => [
                    'U kunt een cadeaubon aanschaffen voor ieder gewenst bedrag. Deze kan worden ingeleverd voor zowel een behandeling als aanschaf voor producten. De bon is een jaar geldig (de datum staat op de bon vermeld). De cadeaubonnen zijn niet verzilverbaar en dient u in 1 keer te besteden.',
                    'Als u het leuk vind om iemand te verrassen met een cadeaubon kunt u contact opnemen, dan pak ik de bon mooi voor u in!'
                ],
                'photo' => 'Photos/cadeaubon.jpg'
            ],
            'landline' => '0593 859 403',
            'mobile' => '06 8145 6398',
        ]);
    }
}