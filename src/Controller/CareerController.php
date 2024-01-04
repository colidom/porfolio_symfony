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
        $experiences = [
            [
                'date' => 'sept. 2023 - Actualidad',
                'location' => 'Santa Cruz de Tenerife, Canarias, España (En remoto)',
                'position' => 'Desarrollador web en Eviden',
                'description' => 'Desarrollo Web con Spring MVC, JSP e Hibernate en proyecto para el cliente EDP-Viesgo. Emocionado por lo que está por venir en este viaje de desarrollo web.',
                'skills' => 'JavaScript, Trabajo en equipo, Desarrollo de software, Apache, Hojas de estilos en cascada (CSS)'
            ],
            [
                'date' => 'abr. 2023 - sept. 2023',
                'location' => 'Santa Cruz de Tenerife, Canarias, España (Híbrido)',
                'position' => 'Desarrollador de eCommerce',
                'description' => 'Mi labor consiste en desarrollar módulos de alta calidad para las plataformas e-commerce PrestaShop y Woocommerce, integrando servicios de paquetería nacional e internacional. Utilizo PHP, JavaScript, Python, SQL, servicios REST y SOAP, HTML5, CSS3, jQuery y Bootstrap.',
                'skills' => 'JavaScript, PHP, HTML, Desarrollo de software, Metodologías ágiles'
            ],
            [
                'date' => 'jun. 2021 - abr. 2023',
                'location' => 'Santa Cruz de Tenerife, Canarias, España (Presencial)',
                'position' => 'Desarrollador de eCommerce en Atos IT Solutions and Services A/S',
                'description' => 'Desarrollo de módulo/plugin e-commerce en las plataformas PrestaShop y Woocommerce para el cliente Correos, integrando servicios de paquetería nacional e internacional. Tecnologías empleadas: PHP, JavaScript, Python, SQL, Servicios REST y SOAP, HTML5, CSS3, jQuery y Bootstrap.',
                'skills' => 'JavaScript, PHP'
            ],
            [
                'date' => 'ago. 2019 - jun. 2021',
                'location' => '38612 Granadilla, Santa Cruz de Tenerife',
                'position' => 'Desarrollador SOA en el Centro de Excelencia para el desarrollo y la innovación CEDeI',
                'description' => 'Desarrollador SOA (Arquitectura Orientada a Servicios) en el Centro de Excelencia para el desarrollo y la innovación CEDeI. Actualmente formo parte del equipo de integración de sistemas en el cliente Grupo Correos. Uso de herramientas IBM Integration Bus (WebSphere Message Broker).',
                'skills' => 'Arquitectura Orientada a Servicios, IBM Integration Bus, WebSphere Message Broker'
            ],
            [
                'date' => 'ago. 2018 - ago. 2019',
                'location' => '38612 Granadilla, Santa Cruz de Tenerife',
                'position' => 'Becario en ITER - Instituto Tecnológico y de Energías Renovables, S.A.',
                'description' => 'Becario del programa CEDeI que promueve la creación de un plan de formación y empleo en el sector tecnológico, especialmente en el campo de las Tecnologías de la Información y la Innovación en Ciencia.',
                'skills' => 'Tecnologías de la Información, Innovación en Ciencia'
            ]
        ];

        return $this->render('career/career.html.twig', [
            'title' => 'Experiencia Laboral',
            'experiences' => $experiences
        ]);
    }
}
