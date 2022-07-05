<?php

namespace App\Controller;

use App\Entity\Crud;

use App\Form\CrudType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RideServiceController extends AbstractController
{
    /**
     * @Route("/ride_service/", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('ride_service/index.html.twig', [
            'controller_name' => 'RideServiceController',
        ]);
    }

    /**
     * @Route("/ride_service/create", methods={"GET"})
     */
    public function create(): Response
    {
        return $this->render('ride_service/create.html.twig');
    }

    /**
     * @Route("/ride_service/create", methods={"POST"})
     */
    public function createService()
    {
        die("I am the post route");
    }
}
