<?php

namespace App\Controller;

use App\Entity\Crud;
use Doctrine\Persistence\ManagerRegistry;
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
     * @Route("/ride_service/all", methods={"GET"})
     */
    public function all(ManagerRegistry $doctrine): Response
    {
        $crud = new Crud();
        $allRides = $doctrine->getRepository($crud)->findAll();
        return $this->render('ride_service/all.html.twig', [
            'allRides' => $allRides,
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
    public function createService(Request $request, ManagerRegistry $doctrine)
    {
        $rideService = $request->request->all();

        $em = $doctrine->getManager();
        $em->persist(json_decode(json_encode($rideService)));
        $em->flush();
        return $this->redirect('/ride_service');
    }
}
