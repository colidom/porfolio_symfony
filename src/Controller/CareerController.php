<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CareerController extends AbstractController
{
    #[Route('/career', name: 'career')]
    public function index(): Response
    {
        return $this->render('career/career.html.twig', [
            'title' => 'Mi trayectoria'
        ]);
    }
}
