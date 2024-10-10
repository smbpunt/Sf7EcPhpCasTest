<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/secured', name: 'app_secured')]
class SecuredController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('secured/index.html.twig', [
            'controller_name' => 'SecuredController',
        ]);
    }
}
