<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'projects')]
    public function index(): Response
    {
        $projects = [
            [
                'title' => 'Card title 1',
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/110.webp',
                'description' => "Some quick example text for the first card."
            ],
            [
                'title' => 'Card title 2',
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp',
                'description' => "Some quick example text for the second card."
            ],
            [
                'title' => 'Card title 3',
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/112.webp',
                'description' => "Some quick example text for the third card."
            ]
        ];

        return $this->render('projects/projects.html.twig', [
            'title' => 'Proyectos',
            'projects' => $projects
        ]);
    }
}
