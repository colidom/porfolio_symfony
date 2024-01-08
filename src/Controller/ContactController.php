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
        $form = [];

        if ('POST' === $_SERVER['REQUEST_METHOD']) {

            $form = array(
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "message" => nl2br($_POST["message"])
            );

        }

        return $this->render('contact/contact.html.twig', [
            'title' => 'Contacto',
            'form' => $form
        ]);
    }
}
