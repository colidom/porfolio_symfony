<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $email = (new Email())
                ->from($formData['email'])
                ->to('soporte@porfolio.com')
                ->subject('Nuevo mensaje de contacto')
                ->html($formData['message']);

            $mailer->send($email);

            return $this->redirectToRoute('contact_success');
        }

        return $this->render('contact/contact.html.twig', [
            'title' => 'Contacto',
            'form' => $form->createView()
        ]);
    }

    public function success(): Response
    {
        return $this->render('contact/success.html.twig');
    }

}
