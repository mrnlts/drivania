<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RideServiceController extends AbstractController
{
    #[Route('/ride_service', name: 'app_ride_service')]
    public function index(): Response
    {
        return $this->render('ride_service/index.html.twig', [
            'controller_name' => 'RideServiceController',
        ]);
    }
}
