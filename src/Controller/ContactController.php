<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {

        if ('POST' === $_SERVER['REQUEST_METHOD']) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $name = $_POST['name'];

        }

        return $this->render('contact/contact.html.twig', [
            'title' => 'Contacto'
        ]);
    }
}
